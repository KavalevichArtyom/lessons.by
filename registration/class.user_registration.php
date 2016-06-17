<?php
session_start();

include_once 'core/class.connect.php';
include_once 'generate_code/class.generate_code.php';

$obj=new connect_db();
$obj->connect();
	
class registration
	{
	private $query;
	private $result;
	private $lenght_number;
	
		public function user_registration($surname_registation,$name_registation,$middle_name_registation,$login_registation,$email_registation,$password_registation)
			{
				$this->lenght_number=40;
				
				
				
				$this->query = "SELECT surname,name,middle_name,email,password,login FROM users where (email='".$email."' or login='".$email."') and password='".$password."'";
				$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
					
				$rows   = mysql_fetch_array($this->result);
					
				$db_password           = $rows['password'];
				$db_email       	   = $rows['email'];
				$db_surname            = $rows['surname'];
				$db_name       		   = $rows['name'];
				$db_middle_name        = $rows['middle_name'];
				
				
				$generate_code=$_SESSION['generate_code'];							
				
				if(empty($generate_code)==false)
				{	
					$obj=new generate();
					$obj->generate_code($this->lenght_number);
		
					$_SESSION['push_true']=true;
					
					echo '<script type="text/javascript">'; 
					echo 'window.location.href="verification.php";'; 
					echo '</script>';
				}
					
					$insert_into_true=$_SESSION['insert_into_true'];
				
				if((isset($insert_into_true)) && (!(empty($insert_into_true))))
				{
					echo $insert_into_true."<br>";
					
					$time_run=time();
					$time_live=86400;
					$time_delete=$time_run+$time_live;
					$active=0;
					$url_true=$_SESSION['url_true'];
					$hash=parse_url($url_true, PHP_URL_QUERY);
					
					$this->query = "INSERT INTO users(surname,name,middle_name,login,email,password,time_run,time_live,time_delete,active,hash) VALUES ('".$surname_registation."','".$name_registation."','".$middle_name_registation."','".$login_registation."','".$email_registation."','".$password_registation."','".$time_run."','".$time_live."','".$time_delete."','".$active."','".$hash."')";
					$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
						
/* 					$_SESSION['alert_autorize']=true;
					$_SESSION['autorize_true']=true; */
					unset($_SESSION['insert_into_true']);
					
/* 					echo '<script type="text/javascript">'; 
					echo 'window.location.href="verification.php";'; 
					echo '</script>'; */	
				} 
			}
	}
	