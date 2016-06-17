<?php
session_start();

include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();
	
class check
	{
	private $query;
	private $result;
	
		public function check_mail($mail)
			{
				$this->query = "SELECT href_mail FROM mail where mail_domain='".$mail."'";
				$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
					
				$rows   = mysql_fetch_array($this->result);
					
				$db_href_mail          = $rows['href_mail'];
				
				echo '<div class="text_email">';
				echo '<a href="'.$db_href_mail.'"><p>Почтовый сервис: '.$mail.'<p></a>';		
				echo '</div class="text_email">';
			}
	}
	