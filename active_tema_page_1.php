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

<?php
//Подключение к базе данных
include_once 'core/connect.php';
include_once 'core/news.php';

//echo сonclusion_news();
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



<div class="image"><!--Вывод изображения -->

<img src="Image/4(2).jpg"></img>


<div class="image_text">

<p>Темы</p>

</div class="image_text">


</div class="image">



<div class="goal" >

<div class="goal_child" >


<div class="menu_forums_left" >

<div class="menu_forums_left_heads" >

<p></p>	

</div class="menu_forums_left_heads" >


<div class="menu_forums_left_edit" >


<div class="menu_forums_left_edit_text" >

<input type="text"  value="По Терминам">

</div class="menu_forums_left_edit_text" >


<div class="menu_forums_left_text" >

<p>ТЕМЫ</p>

</div class="menu_forums_left_text" >


</div class="menu_forums_left_edit" >


<div class="menu_forums_left_page" >


<div class="menu_forums_left_page_1" id="one" >

<a href="active_tema_page_1.php"><p>Тема №1</p></a>

</div class="menu_forums_left_page_1" id="one" >

<div class="menu_forums_left_page_1" id="two" >

<a href="#"><p>Наименование темы/раздела</p></a>

</div class="menu_forums_left_page_1" id="two">

<div class="menu_forums_left_page_1" id="three">

<a href="#"><p>Наименование темы/раздела</p></a>

</div class="menu_forums_left_page_1" id="three" >

<div class="menu_forums_left_page_1" id="four">

<a href="#"><p>Наименование темы/раздела</p></a>

</div class="menu_forums_left_page_1" id="four">

<div class="menu_forums_left_page_1" id="five">

<a href="#"><p>Наименование темы/раздела</p></a>

</div class="menu_forums_left_page_1" id="five">

<div class="menu_forums_left_page_1" id="sixe">

<a href="#"><p>Наименование темы/раздела</p></a>

</div class="menu_forums_left_page_1" id="sixe">


</div class="menu_forums_left_page" >



</div class="menu_forums_left" >

<!--________________________________________________________________NEWS_TOPIC_____________________________________________________________________________-->

<div class="menu_forums_right" >

<div class="menu_forums_right_head">

<p>Темы / Оборудование</p>

</div class="menu_forums_right_head">


<?php
echo сonclusion_news();//Вывод новостей
?>


</div class="menu_forums_right" >
<!--________________________________________________________________END_NEWS_TOPIC_____________________________________________________________________________-->
<!-- Центральная полоса новостей -->

<div class="menu_capcion">

<div class="menu_capcion_head_active_page">

<p>Тема №1</p>

</div class="menu_capcion_head_active_page">

<div class="active_tema_page_1">



<div class="active_tema_page_1_section" id="active_tema_page_1_section_1">

<div class="active_tema_page_1_section_head">

<p>ТЕМА: "Изучение особенностей выполнения команды пересылки кодов (MOV), особенностей выполнения команды сравнения кодов (CMP) и ее влияния на флаги состояния регистра флагов".</p>

</div class="active_tema_page_1_section_head">

<div class="active_tema_page_1_section_text">

<p> 

<?php 

for($i=0;$i<7;$i++)
{
echo "&nbsp;";
}
?>

"Команда MOV замещает операнд-приемник операндом-источником. При этом исходное значение операнда-приемника теряется. Операнд-источник не изменяется. В зависимости от описания операндов, пересылается..." 

</p>

</div class="active_tema_page_1_section_text">

<div class="active_tema_page_1_section_href">

<a href="#"><p>Перейти</p></a>

</div class="active_tema_page_1_section_href">


</div class="active_tema_page_1_section" id="active_tema_page_1_section_1">


<!--<div class="active_tema_page_1_section" id="active_tema_page_1_section_2">

<div class="active_tema_page_1_section_head">

<p>Практическая работа № 5</p>

</div class="active_tema_page_1_section_head">

<div class="active_tema_page_1_section_text">

<p>Тема: "Разработка программ линейной структуры с использованием арифметических команд CPU i8086".</p>

</div class="active_tema_page_1_section_text">

<div class="active_tema_page_1_section_href">

<a href="#"><p>Перейти</p></a>

</div class="active_tema_page_1_section_href">

</div class="active_tema_page_1_section" id="active_tema_page_1_section_2">



<div class="active_tema_page_1_section" id="active_tema_page_1_section_3">

<div class="active_tema_page_1_section_head">

<p>Наименование Раздела</p>

</div class="active_tema_page_1_section_head">

<div class="active_tema_page_1_section_text">

<p>According to the latest whispers Nvidia has allegedly designed two reference PCBs with GDDR5X and GDDR5 compatibility fAccording to the latest whispers Nvidia has allegedly designed two reference PCBs with GDDR5X and GDDR5 compatibility f…</p>

</div class="active_tema_page_1_section_text">

<div class="active_tema_page_1_section_href">

<a href="#"><p>Перейти</p></a>

</div class="active_tema_page_1_section_href">

</div class="active_tema_page_1_section" id="active_tema_page_1_section_3">



<div class="active_tema_page_1_section" id="active_tema_page_1_section_4">

<div class="active_tema_page_1_section_head">

<p>Наименование Раздела</p>

</div class="active_tema_page_1_section_head">

<div class="active_tema_page_1_section_text">

<p>According to the latest whispers Nvidia has allegedly designed two reference PCBs with GDDR5X and GDDR5 compatibility fAccording to the latest whispers Nvidia has allegedly designed two reference PCBs with GDDR5X and GDDR5 compatibility f…</p>

</div class="active_tema_page_1_section_text">

<div class="active_tema_page_1_section_href">

<a href="#"><p>Перейти</p></a>

</div class="active_tema_page_1_section_href">

</div class="active_tema_page_1_section" id="active_tema_page_1_section_4">

-->
</div class="active_tema_page_1">

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
