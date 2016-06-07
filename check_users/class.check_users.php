<?php
session_start();

include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();
	
class check
	{
	private $query;
	private $result;
	
		public function check_password_users($email,$password)
			{
			$this->query = "SELECT email, password,login FROM users where (email='".$email."' or login='".$email."') and password='".$password."'";
			$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
			
			$rows   = mysql_fetch_array($this->result);
			
			$db_password         = $rows['password'];
			$db_email       	 = $rows['email'];
			
			if((isset($db_password )==true) && (empty($db_password )!==true) && (isset($db_email)==true) && (empty($db_email)!==true))
				{
					echo '<script type="text/javascript">'; 
					echo 'window.location.href="http://lessons.by/Control_know_page.php";'; 
					echo '</script>'; 
				}		
				else
				{
					echo '<script type="text/javascript">'; 
					echo 'window.location.href="http://lessons.by/window_autorize.php";'; 
					echo 'alert("Пароль не верный!")';  
					echo '</script>';
				}
			}
	}