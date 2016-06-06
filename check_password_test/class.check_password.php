<?php
session_start();

include_once 'coneckt/coneckt.php';
	
private $query;
private $result;	
	
class check
	{
		public function check_password($test)
			{
			$this->query = "SELECT password,time_life FROM password_test where number_test=".$test."";
			$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
			
			$rows   = mysql_fetch_array($this->result);
			
			$db_password         = $rows['password'];
			$db_time_life        = $rows['time_life'];
			
			echo $db_password."<br>";
			echo $db_time_life."<br>";

			}
	}