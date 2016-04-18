<?php
//Данные для подключения к базе
$dbhost           = "localhost";
$dbusername       = "rss";
$dbpassword       = "123";
$dbname           = "Hardware";

//Подключаем базу данных
$connection = mysql_connect("$dbhost","$dbusername","$dbpassword") or die ("Не возможно подкючиться к серверу.");
mysql_select_db($dbusername,$connection) or die ("Не удалось подключиться к таблице");
?>