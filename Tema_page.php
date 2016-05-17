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
	$(document).ready(function(){
   $('.heads_left_buttom').hide()
    $('.heads_left_buttom').click(function(){
        $('.heads_left_table_and_heads_left_buttom_up').slideToggle("slow");
		$('.heads_left_buttom').hide()
    })
	$('.heads_left_buttom_up').click(function(){
           $('.heads_left_table_and_heads_left_buttom_up').hide()
		   $('.heads_left_buttom').slideToggle("slow");
    })
})

$(document).ready(function() {
 $("#menu1 ul").hide();
 $("#menu1 li span").click(function() { $(this).next().slideToggle("normal"); });
});

$(document).ready(function(){
/* 					$('#menu2').stickyfloat({ duration: 400 });	 */
                    $('#menu_left').stickyfloat({ duration: 400 });				
				});		
</script>  
	
</head>
<body>

<?php
//Подключение к базе данных
include_once 'core/news.php';
include_once 'core/class.siction.php';
include_once 'class.read_db_theme.php';


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

<div class="Tema_active">

</div class="Tema_active">

</div class="active_button_menu">

</div class="strip"><!--Закрытие полосы активной страницы -->


<!--
<div class="image"><!--Вывод изображения 

<img src="Image/4(2).jpg"></img>


<div class="image_text">

<p>Темы</p>

</div class="image_text">


</div class="image">
-->


<div class="goal" >

<div class="goal_child" >


<div class="heads_left">

<div class="heads_left_block" id="menu_left">

<div class="heads_left_name">

<p>Занятия<p>

</div class="heads_left_name">

<div class="heads_left_search">
        <form>
                
				<input type="text" class="search rounded" >
				<input type="button" value="Искать...">
				
        </form>
</div class="heads_left_search">



<div class="heads_left_buttom">

<div class="heads_left_buttom_size">

<img src="Image/9.png"></img>

<p>Развернуть</p>

</div class="heads_left_buttom_size">

</div class="heads_left_buttom">

<div class="heads_left_table_and_heads_left_buttom_up">

<div class="heads_left_table">

<ul id="menu1">
<?php

$obj=new siction();
$obj->сonclusion_siction();

?>
</ul id="menu1">

</div class="heads_left_table">

<div class="heads_left_buttom_up">

<div class="heads_left_buttom_size">

<img src="Image/8.png"></img>

<p>Свернуть</p>

</div class="heads_left_buttom_size">

</div class="heads_left_buttom_up">

</div class="heads_left_table_and_heads_left_buttom_up">

</div class="heads_left_block" id="menu_left">

</div class="headsleft_left">
<!--________________________________________________________________NEWS_TOPIC_____________________________________________________________________________-->

<div class="menu_forums_right" >

<div class="menu_forums_right_head">

<p>Библиотека</p>

</div class="menu_forums_right_head">

<?php
echo сonclusion_news();//Вывод новостей
?>

</div class="menu_forums_right" >
<!--________________________________________________________________END_NEWS_TOPIC_____________________________________________________________________________-->
<!-- Центральная полоса новостей -->

<div class="menu_capcion">

<div class="menu_capcion_head">

<p>Новостная лета</p>

</div class="menu_capcion_head">

<div class="menu_capcion_news">

<?php
 echo сonclusion_news(1);//Вывод новостей
?>



</div class="menu_capcion_news">

</div class="menu_capcion">

</div class="goal_child" >

</div class="goal" >



<div class="footer">


<!--<div class="footer_link" >

<p><a href="Tema_page.php">Темы</a></p>

</div class="footer_link" id="it_image">
-->

<div class="footer_text">

<p>© <?php echo date('Y')?> lesson.by. Все права защищены. Перепечатка запрещена.</p>

</div class="footer_text">


</div class="footer">



</body>

</html>
