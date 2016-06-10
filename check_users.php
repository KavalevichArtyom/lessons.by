<?php
	include_once 'core/class.connect.php';	
	include_once 'check_users/class.check_users.php';	
	include_once 'registration/class.user_registration.php';	
	
	/*Для авторизации*/	

	$email_login=$_POST['email_login'];
	$password_login=$_POST['password_login'];
	
	/*Для регистрации*/	
	
	$surname_registation=$_POST['surname_registation'];
	$name_registation=$_POST['name_registation'];
	$middle_name_registation=$_POST['middle_name_registation'];
	$login_registation=$_POST['login_registation'];
	$email_registation=$_POST['email_registation'];
	$password_registation=$_POST['password_registation'];
	$password_reset_registation	=$_POST['password_reset_registation'];
		
	$_SESSION['surname_registation']=$surname_registation;
	$_SESSION['name_registation']=$name_registation;
	$_SESSION['middle_name_registation']=$middle_name_registation;
	$_SESSION['login_registation']=$login_registation;
	$_SESSION['email_registation']=$email_registation;
	$_SESSION['password_registation']=$password_registation;
	$_SESSION['password_reset_registation']=$password_reset_registation;	
/* 		
	echo "surname_registation  -",$surname_registation;
	echo "<br>name_registation  -",$name_registation;
	echo "<br>middle_name_registation  -",$middle_name_registation;
	echo "<br>login_registation  -",$login_registation;
	echo "<br>email_registation  -",$email_registation;
	echo "<br>password_registation  -",$password_registation;
	echo "<br>password_reset_registation  -",$password_reset_registation; */
	
	$obj=new connect_db();
	$obj->connect();

if((isset($password_login)==true) && (empty($password_login)!==true) && (isset($email_login)==true) && (empty($email_login)!==true))
{

	$obj=new check();
	$obj->check_password_users($email_login,$password_login);

}
	$preg_match=preg_match('/.+@.+\..+/i',$email_registation);	
		
	if(!$preg_match===true)
	{	
		echo $preg_match;
		$_SESSION['preg_match_false']=true;
	}
	else
	{
		$preg_match_true=true;
	}

	$query = "SELECT surname,name,middle_name,email,password,login FROM users where login='".$login_registation."'";
	$result = mysql_query($query) or die ("Не верный запрос."); 
				
	$rows   = mysql_fetch_array($result);
				
	$db_login= $rows['login'];
	
	if(!empty($db_login))
	{		
		$_SESSION['login_registation_false']=true;
	}
	else
	{
		$email_login_true=true;
	}
			
	$query = "SELECT surname,name,middle_name,email,password,login FROM users where email='".$email_registation."'";
	$result = mysql_query($query) or die ("Не верный запрос."); 
				
	$rows   = mysql_fetch_array($result);
				
	$db_email= $rows['email'];

	if(!empty($db_email))
	{		
		$_SESSION['email_registation_false']=true;
	}
	else
	{
		$email_registation_true=true;
	}
	
	if(($_SESSION['email_registation_false']===true)||($_SESSION['login_registation_false']===true))
	{
		echo '<script type="text/javascript">'; 
		echo 'window.location.href="http://lessons.by/window_autorize.php";'; 
		echo '</script>';
	}
	
	if($_SESSION['preg_match_false']===true)
	{
		echo '<script type="text/javascript">'; 
		echo 'window.location.href="http://lessons.by/window_autorize.php";'; 
		echo '</script>';
	}
	
	if(!($password_registation===$password_reset_registation))
	{
		$_SESSION['password_registation_false']=true;
					
		echo '<script type="text/javascript">'; 
		echo 'window.location.href="http://lessons.by/window_autorize.php";'; 
		echo '</script>';
	}
	else
	{
		$password_registation_true=true;
	}
	
	
if	(
	   (isset($surname_registation)==true) 			&& (empty($surname_registation)!==true) 
	&& (isset($name_registation)==true) 			&& (empty($name_registation)!==true)
	&& (isset($middle_name_registation)==true) 		&& (empty($middle_name_registation)!==true)
	&& (isset($login_registation)==true) 			&& (empty($login_registation)!==true)
	&& (isset($email_registation)==true) 			&& (empty($email_registation)!==true)
	&& (isset($password_registation)==true) 		&& (empty($password_registation)!==true)
	&& (isset($password_reset_registation)==true) 	&& (empty($password_reset_registation)!==true)
	)
		{	
			

			if(($password_registation_true) && ($email_registation_true) && ($email_login_true) && ($preg_match_true))
				{	
					$_SESSION['fio']="".$_SESSION['surname_registation']." ".$_SESSION['name_registation']." ".$_SESSION['middle_name_registation']."";
					$obj=new registration();
					$obj->user_registration($surname_registation,$name_registation,$middle_name_registation,$login_registation,$email_registation,$password_registation);
					
				}
		}
?>

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

