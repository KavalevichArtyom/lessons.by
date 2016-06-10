<?php
session_start();

include_once 'core/class.connect.php';

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
			
			
			$this->query = "INSERT INTO users(surname,name,middle_name,login,email,password) VALUES ('".$surname_registation."','".$name_registation."','".$middle_name_registation."','".$login_registation."','".$email_registation."','".$password_registation."')";
			$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
					
					$_SESSION['alert_autorize']=true;
					$_SESSION['autorize_true']=true;
					echo '<script type="text/javascript">'; 
					echo 'window.location.href="http://lessons.by/Control_know_page.php";'; 
					echo '</script>'; 				
			}
	}
	