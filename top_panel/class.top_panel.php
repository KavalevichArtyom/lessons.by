<?php
session_start();
// 02.06.2018 16:39 session_start();

include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();
	
class panel
	{
	private $query;
	private $result;
	
		public function top_panel($position,$href_to)
			{
			echo '<div class="panel_button"><!--Панель управления -->';
			echo '<input type="button" class="autorize" onclick="href_query_next(\'window_autorize.php\')" value="Авторизация">';
			echo '<input type="button" class="registration" onclick="href_query_next_registrition(\'window_autorize.php\')" value="Регистрация">';
			echo '<div class="button_menu"><!--Панель кнопок -->';
			echo '<input type="button" id="About_the_site" onclick="About_the_site_page()" value="Главная">';
			echo '<input type="button" id="Tema" onclick="Tema_page()" value="Темы" >';
			echo '<input type="button" id="Presentation" onclick="Presentation_page()" value="Презентации">';
			echo '<input type="button" id="Control_know" onclick="'.$href_to.'" value="Контроль знаний" >';

			echo '</div class="button_menu"><!--Закрытие панель кнопок -->';
			echo '</div class="panel_button"><!--Закрытие панель управления -->';
			echo '<div class="strip"><!--Полоса активной страницы -->';
			echo '<div class="active_button_menu">';
			echo '<div class="'.$position.'">';
			echo '</div class="'.$position.'">';
			echo '</div class="active_button_menu">';
			echo '</div class="strip"><!--Закрытие полосы активной страницы -->';
			}
	}
	