<?php 
	session_start();
	include_once 'core/class.siction.php';
	include_once 'core/news.php';
	include_once 'read_tests/class.read_tests.php';	
	
	$surname_registation=$_SESSION['surname_registation'];
	$name_registation=$_SESSION['name_registation'];
	$middle_name_registation=$_SESSION['middle_name_registation'];
	$login_registation=$_SESSION['login_registation'];
	$email_registation=$_SESSION['email_registation'];
	$password_registation=$_SESSION['password_registation'];
	$password_reset_registation=$_SESSION['password_reset_registation'];	
	
	$login_autorize=$_SESSION['login_autorize'];
	$password_autorize=$_SESSION['password_autorize'];
?>

<html>
<head>
  
    <meta http-equiv="content-language" content="ru"/>
    <meta name="author" content="Ковалевич Артём Юрьевич" />
    <meta charset ="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<link rel="stylesheet" type="text/css" href="css/style_autorize.css">
	<script src="JS/JavaScript.js"></script>
	<script src="JS/jquery.js"></script>
	<script src="JS/sticky.js"></script>
	<script>

	
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
	<div class="autorize_body">
	
		<div class="back">
			<a href="http://lessons.by/"><p>Перейти на Главную страницу.</p></a><!--Изменить для хостинга-->	
		</div class="back">
	
		<form method="post" class="block_autorize" action="check_users.php" id="login">
			<div class="main-signin">
				<div class="main-signin__head">
					<p>АВТОРИЗАЦИЯ</p>
				</div>
				<div class="main-signin__middle">
					<div class="middle__form">
						<input type="text" name="email_login"			value="<?echo $login_autorize?>" placeholder="Логин" autofocus required>
						<input type="password" name="password_login"	value="<?echo $password_autorize?>" placeholder="Пароль" autofocus required>
						<input type="submit" value="ВОЙТИ">
					</div>
				</div>
				<div class="main-signin__foot">
					<div class="foot__left">
						<p>Вы еще не снами?</p>
					</div>
					<div class="foot__right">
						<a onclick="combo('block_registation','block_autorize')"><p>Присоединиться</p></a>
					</div>
				</div>
			</div>
		</form>

		<form method="post" class="block_registation" action="check_users.php" id="register">
			<div class="main-signin_registation">
				<div class="main-signin__head_registation">
					<p>Регистрация</p>
				</div>
				<div class="main-signin__middle_registation">
					<div class="middle__form_registation">
						<input type="text" 		name="surname_registation" 			id="surname"		value="<?echo $surname_registation?>"	placeholder="Фамилия"       			 autofocus required>
						<input type="text" 		name="name_registation" 			id="name"			value="<?echo $name_registation?>"	placeholder="Имя" 		     			 autofocus required>
						<input type="text" 		name="middle_name_registation"		id="middle_name"	value="<?echo $middle_name_registation?>"	placeholder="Отчество"  	 			 autofocus required>
						<input type="text" 		name="login_registation" 			id="login_l"			value="<?echo $login_registation?>"	placeholder="Логин" 					 autofocus required>
						<input type="text" 		name="email_registation" 			id="email"			value="<?echo $email_registation?>"	placeholder="E-mail" 					 autofocus required>
						<input type="password"  name="password_registation"			id="password"		value="<?echo $password_registation?>"	placeholder="пароль "       			 autofocus required>
						<input type="password"  name="password_reset_registation"	id="password_reset"	value="<?echo $password_reset_registation?>"	placeholder="подтвердите пароль "        autofocus required>
						<input type="submit" 	value="ВОЙТИ">
					</div>
				</div>
				<div class="main-signin__foot_registation">
					<div class="foot__left_registation">
						<p>Вы уже зарегистрированы?</p>
					</div>
					<div class="foot__right_registation">
						<a onclick="combo('block_autorize','block_registation')"><p>Тогда войдите</p></a>
					</div>
				</div>
			</div>
		</form>		
		
	</div class="autorize_body">
	


</body>

</html>
<?
	unset($_SESSION['autorize_true']);
	
	$login_false=$_SESSION['login_false'];
	$password_false=$_SESSION['password_false'];
	$autorize_false=$_SESSION['autorize_false'];
	$email_registation_false=$_SESSION['email_registation_false'];
	$login_registation_false=$_SESSION['login_registation_false'];
	$password_registation_false=$_SESSION['password_registation_false'];
	$preg_match_false=$_SESSION['preg_match_false'];
	$active_true=$_SESSION['active_true'];

	
	unset($_SESSION['autorize_false']);
	unset($_SESSION['login_false']);
	unset($_SESSION['password_false']);
	unset($_SESSION['email_registation_false']);
	unset($_SESSION['login_registation_false']);
	unset($_SESSION['password_registation_false']);
	unset($_SESSION['preg_match_false']);
	unset($_SESSION['active_true']);
	
	$_SESSION['generate_code']=true;
	$_SESSION['insert_into_true'];
/* 	echo "<pre>";
	echo print_r($_SESSION);
	echo "</pre>"; */
	
	if($autorize_false===true)
	{	
		echo '<script type="text/javascript">'; 
		echo 'alert("Не удается войти.Пожалуйста, проверьте правильность написания логина(e-mail) и пароля.")'; 
		echo '</script>';
		$preg_match_false=false;
	}
				
	if($preg_match_false===true)		
	{
		echo '<script type="text/javascript">';	
		echo 'alert("Не валидный e-mail.")'; 
		echo '</script>';
	}			
				
	if($password_registation_false===true)		
	{
		echo '<script type="text/javascript">';	
		echo 'alert("Пароли не совподают.")'; 
		echo '</script>';
	}
			
	if($email_registation_false===true)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Данный e-mail уже используется.")'; 
		echo '</script>';
	}
	
	if($login_registation_false===true)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Данный логин уже используется.")'; 
		echo '</script>';
	}
	
	if($login_false===true)
	{
		
		echo '<script type="text/javascript">'; 
		echo 'alert("Не верный логин!")'; 
		echo '</script>';
	}
	
	
	
	if($password_false===true)
		{
		
		echo '<script type="text/javascript">'; 
		echo 'alert("Не верный пароль!")'; 
		echo '</script>'; 	
		}
	
	if($active_true===true)
	{
		$_SESSION['active_true']=false;
		echo '<script type="text/javascript">'; 
		echo 'alert("Ваш аккаунт не был активирован.")'; 
		echo '</script>'; 	
	}
/* 	if($_SESSION['autorize_true']===true)
	{
		echo '<script type="text/javascript">'; 
		echo 'window.location.href="Control_know_page.php";'; 
		echo '</script>'; 
	} */