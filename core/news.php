<?php
//Подключение к базе данных
include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();

//"Hardware"
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
//$query  = "SELECT time_news, href_imeg, title, href_news, description FROM Hardware  where id=$max_id";
$query  = "SELECT time_news, href_imeg, title, href_news, description FROM Hardware  order by id desc";
$result = mysql_query($query) or die ("Не верный запрос.");

$news=1;//id выводимого блока в CSS
$number_news=6;//Количество выводимых новостей

if($number_news > 6)
{
$number_news=6;
}

for($i=0;$i<$number_news;$i++,$news++){	

$rows   = mysql_fetch_array($result);
    
     $db_time_news   = $rows['time_news'];
     $db_href_imeg   = $rows['href_imeg'];
     $db_title       = $rows['title'];
     $db_href_news   = $rows['href_news'];
     $db_description = $rows['description']; 
	  
echo '<div class="menu_capcion_news_public" id="menu_capcion_news_public_'.$news.'">';
echo '<div class="menu_capcion_img">';
echo '<a href="'.$db_href_news.'"><img src="'.$db_href_imeg.'"></a>';
echo '</div class="menu_capcion_img">';
echo '<div class="menu_capcion_href">';
echo '<a href="'.$db_href_news.'"><p>'.$db_title.'</p></a>';
echo '</div class="menu_capcion_href">';
echo '<div class="menu_capcion_text">';
echo '<p>'.$db_description.'</p>';
echo '</div class="menu_capcion_text">';
echo '<div class="menu_capcion_time">';
echo '<p>'.$db_time_news.'</p>';
echo '</div class="menu_capcion_time">';
echo '</div class="menu_capcion_news_public" id="menu_capcion_news_public_'.$news.'">';	  
}
}
else
{
$query  = "SELECT time_news, href_imeg, title, href_news, description FROM Hardware  order by id desc ";
$result = mysql_query($query) or die ("Не верный запрос.");

$news=1;//id выводимого блока в CSS
$number_news=4;//Количество выводимых новостей

if($number_news > 4)
{
$number_news=4;
}

for($i=0;$i<$number_news;$i++,$news++){	

$rows   = mysql_fetch_array($result);
    
     $db_time_news   = $rows['time_news'];
     $db_href_imeg   = $rows['href_imeg'];
     $db_title       = $rows['title'];
     $db_href_news   = $rows['href_news'];
     $db_description = $rows['description']; 

	 
echo '<div class="menu_forums_right_news" id="menu_forums_right_news_'.$news.'">';
echo '<div class="menu_forums_right_news_img">';
echo '<a href="#"><img src="'.$db_href_imeg.'"></a>';
echo '</div class="menu_forums_right_news_img">';
echo '<div class="menu_forums_right_news_text_href">';
echo '<a href="'.$db_href_news.'"><p>'.$db_title.'</p></a>';
echo '</div class="menu_forums_right_news_text_href">';
echo '<div class="menu_forums_right_news_text_time">';
echo '<p>'.$db_time_news.'</p>';
echo '</div class="menu_forums_right_news_text_time">';
echo '<div class="menu_forums_right_news_text">';
echo '<p>'.$db_description.'</p>';
echo '</div class="menu_forums_right_news_text">';
echo '</div class="menu_forums_right_news" id="menu_forums_right_news_'.$news.'">'; 
}	
}
}	

?>