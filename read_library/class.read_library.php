<?php
session_start();

include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();
	
class libary
	{
	private $query;
	private $result;
	
		public function read_libary()
			{
				$this->query = "SELECT count(id) as count_id FROM Library";
				$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
					
				$rows   = mysql_fetch_array($this->result);
					
				$db_count_id    = $rows['count_id'];
	
				//Вывод  актуальных новостей на боковую понель 

						$query  = "SELECT title,description,href_books,href_img,time_news FROM Library";
						$result = mysql_query($query) or die ("Не верный запрос.");
						
						$number_news=4;//Количество выводимых новостей
						
						if($db_count_id>$number_news)
						{
							$db_count_id=4;
						}
						
						

						$news=1;
						
						for($i=0;$i<$db_count_id;$i++,$news++)
						{	
	
						$rows   = mysql_fetch_array($result);
							
							 $db_time_news   = $rows['time_news'];
							 $db_href_imeg   = $rows['href_img'];
							 $db_title       = $rows['title'];
							 $db_href_news   = $rows['href_books'];
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