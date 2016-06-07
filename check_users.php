<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">   
        <link rel="stylesheet" href="window_load/css/style.css">
  </head>

  <body>

    <div class="container">
  <div class="gearbox">
  <div class="overlay"></div>
    <div class="gear one">
      <div class="gear-inner">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
    </div>
    <div class="gear two">
      <div class="gear-inner">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
    </div>
    <div class="gear three">
      <div class="gear-inner">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
    </div>
    <div class="gear four large">
      <div class="gear-inner">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
    </div>
  </div>
  <h1>Обработка...</h1>
</div>

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

    <script src="JS/jquery.js"></script>   
  </body>
</html>

<?php
	include_once 'core/class.connect.php';	
	include_once 'check_users/class.check_users.php';	
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$obj=new connect_db();
	$obj->connect();

if((isset($password)==true) && (empty($password)!==true) && (isset($email)==true) && (empty($email)!==true))
{

	$obj=new check();
	$obj->check_password_users($email,$password);

	echo $email.'  and  '.$password; 

}