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
		
	</head>
	<body>

	<?php
	
		include_once 'core/class.siction.php';
		include_once 'core/news.php';
		include_once 'read_tests/class.read_tests.php';	
		include_once 'registration/class.user_registration.php';	
		/* unset($_SESSION['insert_into_true']); */
		$hash=$_GET['hash'];
		unset($_SESSION['generate_code']);
		
		$surname_registation=$_SESSION['surname_registation'];
		$name_registation=$_SESSION['name_registation'];
		$middle_name_registation=$_SESSION['middle_name_registation'];
		$login_registation=$_SESSION['login_registation'];
		$email_registation=$_SESSION['email_registation'];
		$password_registation=$_SESSION['password_registation'];
		$password_reset_registation	=$_SESSION['password_reset_registation'];
		
			
/* 	    echo "<pre>";
		print_r($_SESSION);
		echo "</pre>"; */
		if($_SESSION['push_true']===true)
		{

		
		
		$email=$_SESSION['email_registation'];
		$fio=$_SESSION['fio'];
		$url="ggpk-lessons.kowaleh4.bget.ru";
		$url_true=$_SESSION['url_true'];
		
		$subject = 'Регистрация в ggpk-lessons.kowaleh4.bget.ru'; 
        $subject = '=?utf-8?b?'. base64_encode($subject) .'?='; 
        $headers = "Content-type: text/plain; charset=\"utf-8\"\r\n"; 
        $headers .= "From: <".$email.">\r\n"; 
        $headers .= "MIME-Version: 1.0\r\n"; 
        $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n"; 
		
		$head_1="Приветствуем $fio.\n\n";
		$message=$head_1;
		$head_2="---\n\n";
		$message.=$head_2;
		$head_3="Благодарим вас за регистрацию в $url.\n\n";
		$message.=$head_3;
		$head_4="Ваш аккаунт создан и Вы можете войти, используя свой E-mail и пароль, по ссылке:\n\n".$url_true."\n\n";
		$message.=$head_4;
		$head_5="После регистрации на сайте вы сможете воспользоваться дополнительными возможностями.\n\n";
		$message.=$head_5;
		$head_6="---\n\n";
		$message.=$head_6;
		$head_7="Спасибо за внимание.\n\n";
		$message.=$head_7;
		
		/* $mail=mail($email, $subject, $message, $headers); */
		
		$_SESSION['push_true']=false;
		$_SESSION['insert_into_true']=true;
		
		$obj=new registration();
		$obj->user_registration($surname_registation,$name_registation,$middle_name_registation,$login_registation,$email_registation,$password_registation);
		}
		
		if(!(empty($hash)))
		{
			
		}
	?>
	
	
	<div class="write_registragion">
	
		<div class="write_registragion_top">
			<div class="text_registragion">
				<div class="text_top">
				
					<p>Мы отправили вам письмо.<p>
					
					<p>Пожалуйста, проверьте вашу почту.<p>
					
					<div class="error_mail">
					
						<p>Если письма нет в входящих, проверьте раздел спама.</p>
						
					</div>
					
				</div class="text_top">
			</div class="text_registragion">
		</div class="write_registragion_top">
	
		<div class="write_registragion_bottom">
		
		<div class="text_email">
		
			<a href="https://mail.google.com/"><p>Почтовый сервис: Gmail.com<p></a>
			
		</div class="text_email">
		
		</div class="write_registragion_bottom">
	
<!--	<div class="write_registragion_center">
	
	</div class="write_registragion_center">-->
	
	</div class="write_registragion">
	
	
	<div class="footer_index">


	<div class="footer_text">

	<p>© <?echo date('Y')?> lesson.by. Все права защищены. Перепечатка запрещена.</p>

	</div class="footer_text">


	</div class="footer_index">

	</body>
	</html>