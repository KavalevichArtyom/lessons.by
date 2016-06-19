<?php
session_start();
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

<?php
include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();

$password=$_POST['password'];
$test=$_GET['test'];


if((isset($password)==true) && (empty($password)!==true) && (isset($test)==true) && (empty($test)!==true))
{

    $query  = "SELECT id,number_test,password,time_life FROM password_test where password=".$password." and number_test=".$test."";
    $result = mysql_query($query) or die ("Не верный запрос."); 
	
		$rows   = mysql_fetch_array($result);
		
		$db_number_test        = $rows['number_test'];
		$db_password           = $rows['password'];
			
		
		if((isset($db_password )==true) && (empty($db_password )!==true) && ($password==$db_password))
		{
	
			echo '<script type="text/javascript">'; 
			echo 'window.location.href="know_page.php?test='.$db_number_test.'&task=1";'; 
			echo '</script>'; 
		}
		else
		{	
	
			$_SESSION['password_test_false']=true;
			echo '<script type="text/javascript">'; 
			echo 'window.location.href="Control_know_page.php";'; 
			echo '</script>';
		}
	 

}