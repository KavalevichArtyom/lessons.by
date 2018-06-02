<?php

class connect_db
{

//Данные для подключения к базе
private $dbhost;
private $dbusername;
private $dbpassword;
private $dbname;

public function __construct()
     {
	 $this->dbhost           = "localhost";
	 $this->dbusername       = "root";
     $this->dbpassword       = "";
     $this->dbname           = "rss";
	 }
	 
public function connect()
     {   
     //Подключаем базу данных
     $connection = mysql_connect($this->dbhost,$this->dbusername,$this->dbpassword) or die ("Не возможно подкючиться к серверу.");
     mysql_select_db($this->dbname,$connection) or die ("Не удалось подключиться к таблице");
     }
}
?>