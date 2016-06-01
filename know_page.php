<?php
session_start();

$countdown_setting = array(
	"type" 			=> "time", /* date или time, date - отстет до указанной даты, time - отсчет указанного времени */
	"cookie" 		=> true, /* true или false, запоминать время, только для режима time */
	"position"	=> "horizontal", /* horizontal или vertical, положение блока */
/* 	"date"			=> array(
		"year" 		=> 2017,
		"month" 	=> 5,
		"day"		=> 25,
		"hour"		=> 23,
		"minute"	=> 20,
		"second"	=> 0
	), */ /* указывается конечная дата, для режима date */
	"time" 			=> array(
		"week"	    => 0,
		"day"		=> 0,
		"hour"		=>0, 
		"minute"	=> 30,
		"second"	=> 0
	), /* указывается время, для режима time */
	"visible"		=> array(
/* 		"week"	    => array("none","недель:"),
		"day"		=> array("block","дней:"),
		"hour"		=> array("block","часов:"), */
		"minute"	=> array("block","минут:"),
		"second"	=> array("block","секунд:")
	) /* настройка отображения блоков, block - показывать соответствующий блок, none - не показывать; второй параметр - заголовок блока */
);
	$time = time();
	
	$script='';
	$countdown_txt = '';
	$block_count = 0;
	/* Генерация html кода таймера */
	foreach($countdown_setting['visible'] AS $i => $v) 
	{
	if ($i=="minute")
	{
			
	$countdown_txt.='<div class="timer_left"><img src="/Image/timer-bg.png"></img><div id="'.$i.'"><span>00</span></div></div class="timer_left">';
	}	
	else
	{	
	$countdown_txt.='<div class="timer_right"><img src="/Image/timer-bg.png"></img><div id="'.$i.'"><span>00</span></div></div class="timer_right">';
	}
		
		$script .= '<script type="text/javascript">var countdown_'.$i.' = "'.$v[0].'";</script>';
		if($v[0]=='block') $block++;
	}
	if($countdown_setting['position'] == 'vertical') $block = 1; 
	$script .= '<script type="text/javascript">var block_count = '.$block.';</script>';
	
	
	
	/* обработка, когда указано время отсчета */
	if($countdown_setting['type'] == 'time') {
		$time_value = $countdown_setting['time']['week']*7*60*60*24+$countdown_setting['time']['day']*60*60*24+$countdown_setting['time']['hour']*60*60+$countdown_setting['time']['minute']*60+$countdown_setting['time']['second'];
		
		
		$time_new = $time+$time_value;

		$not_correct_value=0;
		
		
		/* обработка кукисов */
		if($countdown_setting['cookie']) 
		{
		$time_cookie = (int) $_COOKIE['time'];
		
			if($time_cookie==0)
			{
				setcookie("time",$time_new,time()+$time_new);
				
				
			} 
			else 
			{
				$time_value = $time_cookie-$time;
			}
		}
		$script .= '<script type="text/javascript">var timeleft='.$time_value.';</script>';
	} 
	else 
	
	if ($countdown_setting['type'] == 'date') { /* обработка, когда указана конечная дата */
		$time_value = mktime($countdown_setting['date']['hour'],$countdown_setting['date']['minute'],$countdown_setting['date']['second'],$countdown_setting['date']['month'],$countdown_setting['date']['day'],$countdown_setting['date']['year']);
		$time_value = $time_value-$time;
		$script .= '<script type="text/javascript">var timeleft='.$time_value.';</script>';
		
	}

	
?>

<html>
<head>
  
    <meta http-equiv="content-language" content="ru"/>
    <meta name="author" content="Ковалевич Артём Юрьевич" />
    <meta charset ="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
    <script src="JS/JavaScript.js"></script>
		
	<link rel="stylesheet" type="text/css" media="all" href="css/timer.css" />
	<script type="text/javascript" src="JS/countdown-1.0.1.js"></script>
	<script src="JS/jquery.js"></script>

	
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
	
	<script>
$(document).ready(function() {
	setInterval(countdown_go,1000);
	return false;
});
    </script> 
	
	<?php echo $script; ?>
	
</head>
<body>

<?php
include_once 'read_task/class.read_task.php';
include_once 'inspection/class.inspection.php';


$task=$_GET['task'];
$test=$_GET['test'];
?>

<div class="panel_button"><!--Панель управления -->

<div class="button_menu"><!--Панель кнопок -->

<input type="button" id="About_the_site" onclick="About_the_site_page()" value="Главная">

<input type="button" id="Tema" onclick="Tema_page()" value="Темы" >

<input type="button" id="Presentation" onclick="Presentation_page()" value="Презентации">

<input type="button" id="Control_know" onclick="Control_know_page()" value="Контроль знаний" >



</div class="button_menu"><!--Закрытие панель кнопок -->

</div class="panel_button"><!--Закрытие панель управления -->

<div class="strip"><!--Полоса активной страницы -->

<div class="active_button_menu">

<div class="Control_know_active">

</div class="Control_know_active">

</div class="active_button_menu">

</div class="strip"><!--Закрытие полосы активной страницы -->

<div class="goal_know">

<div class="goal_know_center">


 <?php 
$obj=new contents();
$obj->read_task_one($task,$test);



if(isset($_GET['checkbox']))
{
$name="checkbox_check";
echo "checkbox_check";

}

if(isset($_GET['radio']))
{
$name="radio_check";
echo "radio_check";
}


$obj=new inspection();
$obj->inspection_tests($name,$task,$test);



?>



</div class="goal_know_center">

</div class="goal_know">

<div class="timer">

<?php echo $countdown_txt; ?>

	
<div class="clear"></div>
	
</div class="timer"> 

<div class="footer_know">


<div class="footer_text">

<p>© 2016 lesson.by. Все права защищены. Перепечатка запрещена.</p>

</div class="footer_text">


</div class="footer_know">


</body>

</html>
