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
	
		public function user_registration($surname_registation,$name_registation,$middle_name_registation,$login_registation,$email_registation,$password_registation)
			{
			
				$this->query = "SELECT surname,name,middle_name,email,password,login FROM users where (email='".$email."' or login='".$email."') and password='".$password."'";
				$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
					
				$rows   = mysql_fetch_array($this->result);
					
				$db_password           = $rows['password'];
				$db_email       	   = $rows['email'];
				$db_surname            = $rows['surname'];
				$db_name       		   = $rows['name'];
				$db_middle_name        = $rows['middle_name'];
				
				
/* 				$generate_code=$_SESSION['generate_code'];
				$lenght_number=40;
				
				if(empty($generate_code)==false)
				{	
					$obj=new generate();
					$obj->generate_code($lenght_number);
					
					$url_true="/verification.php&hash=".$_SESSION['generate_code'];
					
					echo '<script type="text/javascript">'; 
					echo 'window.location.href="/verification.php";'; 
					echo '</script>';
				}
					
					$insert_into_true=$_SESSION['insert_into_true'];
				
				if((isset($insert_into_true)) && (!(empty($insert_into_true))))
				{ */
					$this->query = "INSERT INTO users(surname,name,middle_name,login,email,password) VALUES ('".$surname_registation."','".$name_registation."','".$middle_name_registation."','".$login_registation."','".$email_registation."','".$password_registation."')";
					$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
						
					$_SESSION['alert_autorize']=true;
					$_SESSION['autorize_true']=true;
						
						
						
					echo '<script type="text/javascript">'; 
					echo 'window.location.href="ggg/Control_know_page.php";'; 
					echo '</script>'; 				
			/* } */
			}
	}
	