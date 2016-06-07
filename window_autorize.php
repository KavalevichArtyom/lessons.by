<?php 
	session_start();
	include_once 'core/class.siction.php';
	include_once 'core/news.php';
	include_once 'read_tests/class.read_tests.php';	
?>

<html>
<head>
  
    <meta http-equiv="content-language" content="ru"/>
    <meta name="author" content="Ковалевич Артём Юрьевич" />
    <meta charset ="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<link rel="stylesheet" type="text/css" href="css/style_autorize.css">
	<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
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

		<form method="post" class="block_autorize" action="check_users.php" id="login">
			<div class="main-signin">
				<div class="main-signin__head">
					<p>АВТОРИЗАЦИЯ</p>
				</div>
				<div class="main-signin__middle">
					<div class="middle__form">
						<input type="text" name="email" placeholder="логин или mymail@mail.ru" autofocus required>
						<input type="password" name="password" placeholder="пароль например X8df!90EO" autofocus required>
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
						<input type="text" name="email" placeholder="логин или mymail@mail.ru" autofocus required>
						<input type="password" name="password" placeholder="пароль например X8df!90EO" autofocus required>
						<input type="submit" value="ВОЙТИ">
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

<div class="footer_index">

<div class="footer_text">

<p>© 2016 lesson.by. Все права защищены. Перепечатка запрещена.</p>

</div class="footer_text">


</div class="footer_index">

</body>

</html>
