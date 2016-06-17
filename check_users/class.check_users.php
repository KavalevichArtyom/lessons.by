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
				
				$this->query = "SELECT surname,name,middle_name,email, password,login FROM users where (email='".$email."' or login='".$email."')";
				$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
				
				$rows   = mysql_fetch_array($this->result);
				
				$db_password           = $rows['password'];
				$db_email       	   = $rows['email'];

				if((isset($db_email)==true) && (empty($db_email)!==true))
				{
				    $_SESSION['email_true_autorize']=true;			
				}		
/* 				else
				{ 
					$_SESSION['login_false']=true;	
				} */
				
				$this->query = "SELECT surname,name,middle_name,email, password,login FROM users where password='".$password."'";
				$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
				
				$rows   = mysql_fetch_array($this->result);
				
				$db_password           = $rows['password'];
				$db_email       	   = $rows['email'];
				
				if((isset($db_password)==true) && (empty($db_password)!==true))
					{
						$_SESSION['password_true_autorize']=true;
					}
/* 					else
					{
						$_SESSION['password_false']=true;
					} */
					
				if(($_SESSION['email_true_autorize']==true)&&($_SESSION['password_true_autorize']==true))
				{		
						$query = "SELECT surname,name,middle_name,email, password,login FROM users where (email='".$email."' or login='".$email."') and password='".$password."'";
						$result = mysql_query($query) or die ("Не верный запрос."); 
				
						$rows   = mysql_fetch_array($result);
				
						$db_surname            = $rows['surname'];
						$db_name       		   = $rows['name'];
						$db_middle_name        = $rows['middle_name'];
						
						$_SESSION['fio']="".$db_surname." ".$db_name." ".$db_middle_name."";
						
						$_SESSION['alert_autorize']=true;
						$_SESSION['autorize_true']=true;
						$_SESSION['login_autorize']=$email;
						$_SESSION['password_autorize']=$password;
						
						$_SESSION['email_true_autorize']=false;
						$_SESSION['password_true_autorize']=false;
						
						$_SESSION['password_false']=false;
						$_SESSION['login_false']=false;
						
						echo '<script type="text/javascript">'; 
						echo 'window.location.href="Control_know_page.php";'; 
						echo '</script>'; 
				}
				else
				{		
						$_SESSION['autorize_false']=true;
						echo '<script type="text/javascript">'; 
						echo 'window.location.href="window_autorize.php";'; 							
						echo '</script>';
				}
			}
	}