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
	if($correct==0)
	{
		$value=0;
	}
	if ($correct<($task*0.1))
	{
		$value=0;
	}	
	if ($correct>($task*0.1))
	{
		$value=1;
	}
	
	
	if ($correct>($task*0.2))
	{
		$value=2;
	}
		
	if ($correct>($task*0.3))
	{
		$value=3;
	}
	if ($correct>($task*0.4))
	{
		$value=4;
	}
	if ($correct>($task*0.5))
	{
		$value=5;
	}
	
	if ($correct>($task*0.6))
	{
		$value=6;
	}
	if ($correct>($task*0.7))
	{
		$value=7;
	}
	if ($correct>($task*0.8))
	{
		$value=8;
	}
	if ($correct>($task*0.9))
	{
		$value=9;
	}
	if ($correct>($task*1))
	{
		$value=10;
	}
	
	$_SESSION['time_now']=$time_now;
 
    $not_correct=$task-$correct;
    $_SESSION['not_correct']=$not_correct;

 	$query_radio = "INSERT INTO read_result_users_test(number_test,fio_users,queryes,correct,not_correct,time,value) VALUES ('".$number_test."','".$fio."','".$task."','".$correct."','".$not_correct."','".$time_now."','".$value."')";
	mysql_query($query_radio) or die ("Не верный запрос."); 

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
