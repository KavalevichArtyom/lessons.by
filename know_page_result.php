<?php 
session_start();

include_once 'read_result_users_test/class.read_result_users_test.php';
 
    $correct=$_SESSION['correct'];
    $task=$_SESSION['task'];
	$number_test=$_SESSION['number_test'];
    $time=$_SESSION['time'];
	$time_value=$_SESSION['time_value'];
	$fio=$_SESSION['fio'];
	
	$time_now=$time_value-$time;
	
	if($time_now>60)
	{
	$time_now=$time_now/60;
	$time_now = number_format($time_now, 2, ':', '');
	}
else
	{
	$time_now=$time_now/100;
	$time_now = number_format($time_now, 2, ':', '');
	}

	$value=6;
	
	
	$_SESSION['time_now']=$time_now;
 
    $not_correct=$task-$correct;
    $_SESSION['not_correct']=$not_correct;

 	    $query_radio = "INSERT INTO read_result_users_test(number_test,fio_users,queryes,correct,not_correct,time,value) VALUES ('".$number_test."','".$fio."','".$task."','".$correct."','".$not_correct."','".$time_now."','".$value."')";
	    mysql_query($query_radio) or die ("Не верный запрос."); 
	
	

print_r($_SESSION);
print_r($_COOKIE);


	include_once 'top_panel/class.top_panel.php';	
	
	$position='Control_know_active';
	$href_to='Control_know_page()';
	
	$obj=new panel();
	$obj->top_panel($position,$href_to);

?>

<html>
<head>
  
    <meta http-equiv="content-language" content="ru"/>
    <meta name="author" content="Ковалевич Артём Юрьевич" />
    <meta charset ="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
    <script src="JS/JavaScript.js"></script>

	
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

<div class="goal_know">

<div class="goal_result">

<?php 
$obj=new contents();
$obj->read_result_users_test($time_now);
?>

</div class="goal_result">

</div class="goal_know">

<div class="footer_know">


<div class="footer_text">

<p>© 2016 lesson.by. Все права защищены. Перепечатка запрещена.</p>

</div class="footer_text">


</div class="footer_know">



</body>

</html>
