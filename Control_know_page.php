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

<?php

include_once 'core/class.siction.php';
include_once 'core/news.php';
include_once 'read_tests/class.read_tests.php';


setcookie("time",null,time()-18000);
setcookie("correct",null,time()-18000);
unset($_SESSION['correct_true']);
unset($_SESSION['correct']);
unset($_SESSION['id']);

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

<li>

<div class="test">

<div class="test_number">

<p>Тест №1</p>

</div class="test_number">

<div class="test_image">

<img src="/Image/know.png"></img>

</div class="test_image">

<div class="test_head_text">

<p>Тестирование знаний по следующим работам</p>

</div class="test_head_text">

<div class="test_text">

<p>
-  Лабораторная работа №1;<br />
-  Лабораторная работа №2;<br />
-  Лабораторная работа №3;<br />
-  Практическая работа №1.<br />
-  Практическая работа №2.<br />
</p>

</div class="test_text">


<div class="circs_test">

<p>
Время прохождения теста ограничена 30 минутами.<br /> Количество вопросов в тесте - 20.
</p>

</div class="circs_test">

<div class="href_test">

<a href="know_page.php?test=1&task=1"><p>Пройти тест</p></a>

</div class="href_test">

</div class="test">

</li>

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
