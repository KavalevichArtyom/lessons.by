<?php 
	session_start();
?>
	<html>
	<head>
	  
		<meta http-equiv="content-language" content="ru"/>
		<meta name="author" content="Ковалевич Артём Юрьевич" />
		<meta charset ="utf-8">
		<link rel="stylesheet" type="text/css" href="css/Style.css">
		<script src="JS/JavaScript.js"></script>
		<script src="JS/jquery.js"></script>
		<script src="JS/sticky.js"></script>
		
		<script>
	jQuery(function(f){
		var element = f('#blfix');
		f(window).scroll(function(){
		   
		element['fade'+ (f(this).scrollTop() > 400 ? 'In': 'Out')](1); 
			
		});
	}); 
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
	   $('.heads_buttom').hide()
		$('.heads_buttom').click(function(){
			$('.heads_table_and_heads_buttom_up').slideToggle("slow");
			$('.heads_buttom').hide()
		})
		$('.heads_buttom_up').click(function(){
			   $('.heads_table_and_heads_buttom_up').hide()
			   $('.heads_buttom').slideToggle("slow");
		})
	})

	$(document).ready(function() {
	 $("#menu1 ul").hide();
	 $("#menu1 li span").click(function() { $(this).next().slideToggle("normal"); });
	});
	</script>   

		<script>

		$(document).ready(function(){
						$('#menu2').stickyfloat({ duration: 400 });	                 			
					});		
		
		function showContent(link) {

			var cont = document.getElementById('contentBody');
			var loading = document.getElementById('loading');

			cont.innerHTML = loading.innerHTML;

			var http = createRequestObject();
			if( http )
			{
				http.open('get', link);
				http.onreadystatechange = function ()
				{
					if(http.readyState == 4)
					{
						cont.innerHTML = http.responseText;
					}
				}
				http.send(null);
			}
			else
			{
				document.location = link;
			}
		}

		// создание ajax объекта
		function createRequestObject()
		{
			try { return new XMLHttpRequest() }
			catch(e)
			{
				try { return new ActiveXObject('Msxml2.XMLHTTP') }
				catch(e)
				{
					try { return new ActiveXObject('Microsoft.XMLHTTP') }
					catch(e) { return null; }
				}
			}
		}
		</script> 
		
	</head>
	<body>


	 <div class="write_password" id="popup1">
		<div class="b-popup-content">	
		<form method="post" class="form-4" action="check_test_password.php">
		<label for="password">Введите пароль</label>
		<input type="password" name="password" placeholder="Пароль" autofocus required>
		<input type="submit" name="submit_password" value="Подтвердить">
		</form>
		<div class="password_close">
		<a  accesskey="x" onclick="none('write_password')"><p>Назад[x]</p></a>
		</div>
		</div>
	</div> 


<?php
	
	include_once 'core/class.siction.php';
	include_once 'core/news.php';
	include_once 'read_tests/class.read_tests.php';	

	setcookie("time",null,time()-18000);
	setcookie("correct",null,time()-18000);

	unset($_SESSION['correct_true']);
	unset($_SESSION['correct']);
	unset($_SESSION['not_correct']);
	unset($_SESSION['task']);
	unset($_SESSION['time']);
	unset($_SESSION['time_value']);
	unset($_SESSION['time_now']);
	unset($_SESSION['id']);
	unset($_SESSION['surname_registation']);
	unset($_SESSION['name_registation']);
	unset($_SESSION['middle_name_registation']);
	unset($_SESSION['login_registation']);
	unset($_SESSION['email_registation']);
	unset($_SESSION['password_registation']);
	unset($_SESSION['password_reset_registation']);
	unset($_SESSION['autorize_false']);
	unset($_SESSION['login_false']);
	unset($_SESSION['password_false']);
	unset($_SESSION['email_registation_false']);
	unset($_SESSION['login_registation_false']);
	unset($_SESSION['password_registation_false']);
	unset($_SESSION['preg_match_false']);

	
	include_once 'top_panel/class.top_panel.php';	
	
	$position='Control_know_active';
	$href_to='Control_know_page()';
	
	$obj=new panel();
	$obj->top_panel($position,$href_to);
?>


	<div class="goal_presentation">

	<!--________________________________________________________________goal_presentation_left_____________________________________________________________________________-->

	<div class="goal_presentation_left">

	<div class="heads_block" id="menu2">

	<div class="heads_name">

	<p>Занятия<p>

	</div class="heads_name">

	<div class="heads_search">
			<form>
					
					<input type="text" class="search rounded" >
					<input type="button" value="Искать...">
					
			</form>
	</div class="heads_search">



	<div class="heads_buttom">

	<div class="heads_buttom_size">

	<img src="Image/9.png"></img>

	<p>Развернуть</p>

	</div class="heads_buttom_size">

	</div class="heads_buttom">

	<div class="heads_table_and_heads_buttom_up">

	<div class="heads_table">

	<ul id="menu1">
	<?php

	$obj=new siction();
	$obj->сonclusion_siction();

	?>
	</ul id="menu1">

	</div class="heads_table">

	<div class="heads_buttom_up">

	<div class="heads_buttom_size">

	<img src="Image/8.png"></img>

	<p>Свернуть</p>

	</div class="heads_buttom_size">

	</div class="heads_buttom_up">

	</div class="heads_table_and_heads_buttom_up">

	</div class="heads_block" id="menu2">

	</div class="goal_presentation_left">



	<div class="goal_test_center">

	<div class="head_test">

	<p>ТЕСТЫ</p>

	</div class="head_test">

	<div class="read_tests">

	<ul id="menu2">
	<?php
		$obj=new contents();
		$obj->read_tests();
	?>
	</ul id="menu2">

	</div class="read_tests">

	</div class="goal_test_center">


	<!--________________________________________________________________NEWS_TOPIC_____________________________________________________________________________-->

	<div class="menu_forums_right" >

	<div class="menu_forums_right_head">

	<p>Библиотека</p>

	</div class="menu_forums_right_head">

	<?php
	echo сonclusion_news();//Вывод новостей
	?>

	</div class="menu_forums_right" >



	<div class="footer_presentation">

	<div class="footer_text">

	<p>© 2016 lesson.by. Все права защищены. Перепечатка запрещена.</p>

	</div class="footer_text">


	</div class="footer_presentation">

	</div class="goal_presentation">

	</body>

	</html>
<?php
	$password_test_false=$_SESSION['password_test_false'];
	
	unset($_SESSION['password_test_false']);

	if($_SESSION['alert_autorize']==true)
	{
		echo '<script type="text/javascript">'; 	
		echo 'setTimeout(alert("Добро пожаловать '.$_SESSION['fio'].'"), 1000);';
		echo '</script>'; 	
		$_SESSION['alert_autorize']=false;
	}
	
		if($password_test_false===true)		
	{	
		echo '<script type="text/javascript">';	
		echo 'alert("Не верный пароль.")'; 
		echo '</script>';
	}	