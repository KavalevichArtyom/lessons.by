<?php
header("Content-Type: text/html;charset=utf-8");
?>
<html>
<head>

    <meta name="author" content="Ковалевич Артём Юрьевич" />
	<link rel="stylesheet" type="text/css" href="css/Style.css"/>
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
<body >

<?php
//Подключение к базе данных
include_once 'core/connect.php';
include_once 'core/news.php';
include_once 'parsing_doc/doc.php'

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

<div class="read_middle">


<div class="read_goal" >

<div class="read_goal_child" >


<div class="read_forums_left" >

<div class="read_forums_left_heads" >

<p></p>	

</div class="read_forums_left_heads" >


<div class="read_forums_left_edit" >


<div class="read_forums_left_edit_text" >

<input type="text"  value="По Терминам">

</div class="read_forums_left_edit_text" >


<div class="read_forums_left_text" >

<p>ТЕМЫ</p>

</div class="read_forums_left_text" >


</div class="read_forums_left_edit" >


<div class="read_forums_left_page" >


<div class="read_forums_left_page_1" id="one" >

<a href="active_tema_page_1.php"><p>Тема №1</p></a>

</div class="read_forums_left_page_1" id="one" >

<div class="read_forums_left_page_1" id="two" >

<a href="#"><p>Наименование темы/раздела</p></a>

</div class="read_forums_left_page_1" id="two">

<div class="read_forums_left_page_1" id="three">

<a href="#"><p>Наименование темы/раздела</p></a>

</div class="read_forums_left_page_1" id="three" >

<div class="read_forums_left_page_1" id="four">

<a href="#"><p>Наименование темы/раздела</p></a>

</div class="read_forums_left_page_1" id="four">

<div class="read_forums_left_page_1" id="five">

<a href="#"><p>Наименование темы/раздела</p></a>

</div class="read_forums_left_page_1" id="five">

<div class="read_forums_left_page_1" id="sixe">

<a href="#"><p>Наименование темы/раздела</p></a>

</div class="read_forums_left_page_1" id="sixe">


</div class="read_forums_left_page" >



</div class="read_forums_left" >


<!--________________________________________________________________END_NEWS_TOPIC_____________________________________________________________________________-->
<!-- Центральная полоса новостей -->


</div class="read_goal_child" >

</div class="read_goal" >

<div class="read_document" >
	
<div class="read_document_text"> <!--onload='alert("Размер элемента:" + this.offsetWidth +"x"+ this.offsetHeight)'-->



<?php

//$filename="document/practical/5/5.doc";

//echo "<p>".doc2text($filename)."</p>";

$filename="document/practical/5/5.htm";

$homepage=file_get_contents($filename);

echo $homepage;

?>


</div class="read_document_text">



</div class="read_document">


<div class="read_download">



<div class="download_file">

<div class="active_download_file">

<a href="document/practical/4/4.doc"><p>Скачать документ</p></a>

</div class="active_download_file">

</div class="download_file">



<div class="href_presentation">

<div class="active_presentation">

<a href="#"><p>Перейти к презентации</p></a>

</div class="active_presentation">

</div class="href_presentation">



<div class="href_knowledge">

<div class="active_knowledge">

<a href="#"><p>Перейти к Контролю знаний</p></a>

</div class="active_knowledge">

</div class="href_knowledge">



</div class="read_download">



<div class="read_footer">

<!--
<div class="footer_link" >

<p><a href="Tema_page.php">Темы</a></p>

</div class="footer_link" id="it_image">
-->

<div class="read_footer_text">

<p>© <?php echo date('Y')?> lesson.by. Все права защищены. Перепечатка запрещена.</p>

</div class="read_footer_text">


</div class="read_footer">

</div class="read_middle">

</body>


</html>
