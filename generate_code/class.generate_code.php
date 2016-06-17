<?php
session_start();

include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();
	
class generate
	{
		public function generate_code($length)
			{
			$chars = 'abdefhiknrstyz1234567890';
			$numChars = strlen($chars);
			$string = '';
			for ($i = 0; $i < $length; $i++)
			{
				  $string .= substr($chars, rand(1, $numChars) - 1, 1);
			}
			$_SESSION['generate_code']=$string;
			
			$url="http://lessons.by/check_users.php";/*Изменить для хостига*/
			$parse_url=parse_url($url, PHP_URL_HOST);
			
			$_SESSION['url_true']="".$parse_url."/verification.php?hash=".$_SESSION['generate_code'];
			unset($_SESSION['generate_code']);
			}
	}
	