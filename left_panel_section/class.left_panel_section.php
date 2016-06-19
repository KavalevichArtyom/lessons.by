<?php
session_start();

include_once 'core/class.connect.php';
include_once 'core/class.siction.php';

$obj=new connect_db();
$obj->connect();
	
class left_panel
	{
		public function left_panel_section()
			{
				echo '<div class="heads_block" id="menu2">';
				echo '<div class="heads_name">';
				echo '<p>Занятия<p>';
				echo '</div class="heads_name">';
				echo '<div class="heads_search">';
						echo '<form method="get" action="active_tema_page_1.php">';								
								echo '<input type="text" name="search" value="'.$_SESSION['search'].'" class="search rounded" >';
								echo '<input type="submit" value="Искать...">';						
						echo '</form>';
				echo '</div class="heads_search">';
				echo '<div class="heads_buttom">';
				echo '<div class="heads_buttom_size">';
				echo '<img src="Image/9.png"></img>';
				echo '<p>Развернуть</p>';
				echo '</div class="heads_buttom_size">';
				echo '</div class="heads_buttom">';
				echo '<div class="heads_table_and_heads_buttom_up">';
				echo '<div class="heads_table">';
				echo '<ul id="menu1">';
				
					$obj=new siction();
					$obj->сonclusion_siction();

				echo '</ul id="menu1">';
				echo '</div class="heads_table">';
				echo '<div class="heads_buttom_up">';
				echo '<div class="heads_buttom_size">';
				echo '<img src="Image/8.png"></img>';
				echo '<p>Свернуть</p>';
				echo '</div class="heads_buttom_size">';
				echo '</div class="heads_buttom_up">';
				echo '</div class="heads_table_and_heads_buttom_up">';
				echo '</div class="heads_block" id="menu2">';
			}
	}
	