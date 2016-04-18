<?php
//Подключение к базе данных
include_once 'core/connect.php';

function сonclusion_news($a=2)
{
//Определение количество новостных постов в БД
$query  = "SELECT count(id) as summa_id, MAX(id) as max_id FROM Hardware";
$count  = mysql_query($query) or die ("Не верный запрос.");
$rows   = mysql_fetch_array($count);
if ($a==1)
{
$summa_id  = 1; 
}
else
{
$summa_id  = $rows['summa_id'];
}
$max_id    = $rows['max_id'];

//Вывод  актуальных новостей на боковую понель 


if ($a==1)
{
$query  = "SELECT time_news, href_imeg, title, href_news, description FROM Hardware  where id=$max_id";
$result = mysql_query($query) or die ("Не верный запрос.");

for($i=0;$i<$summa_id;$i++){	

$rows   = mysql_fetch_array($result);
    
     $db_time_news   = $rows['time_news'];
     $db_href_imeg   = $rows['href_imeg'];
     $db_title       = $rows['title'];
     $db_href_news   = $rows['href_news'];
     $db_description = $rows['description']; 
	     
echo 	$db_time_news  ."<br>";	
echo 	'<img src="'.$db_href_imeg.'"'."<br>";	
echo    '<a href="'.$db_href_news.'"><p>'.$db_title.'</p></a></br>';
echo 	$db_description."<br>";	
}
}
else
{
$query  = "SELECT time_news, href_imeg, title, href_news, description FROM Hardware  order by id desc";
$result = mysql_query($query) or die ("Не верный запрос.");

for($i=0;$i<$summa_id;$i++){	

$rows   = mysql_fetch_array($result);
    
     $db_time_news   = $rows['time_news'];
     $db_href_imeg   = $rows['href_imeg'];
     $db_title       = $rows['title'];
     $db_href_news   = $rows['href_news'];
     $db_description = $rows['description']; 
	 
    
echo 	$db_time_news  ."<br>";	
echo 	'<img src="'.$db_href_imeg.'"'."<br>";	
echo    '<a href="'.$db_href_news.'"><p>'.$db_title.'</p></a></br>';
echo 	$db_description."<br>";	

}	
}
}	

?>