<?php
header("Content-Type: text/html;charset=utf-8");
?>
<html>
<head>

    <meta name="author" content="Ковалевич Артём Юрьевич" />
	<link rel="stylesheet" type="text/css" href="css/Style.css"/>
	<script src="JS/JavaScript.js"></script>
	<script src="JS/jquery.js"></script>
	<script src="JS/sticky.js"></script>
	
	<script>

	$(document).ready(function(){
					$('#menu').stickyfloat({ duration: 400 });					
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


<!--________________________________________________________________END_NEWS_TOPIC_____________________________________________________________________________-->

<div class="read_middle">

<div class="up" onclick="return up()">

<div class="now_scroll" id="menu" >

<a href="#" ><p><img src="Image/scroll.png">Наверх</p></img></a>

</div class="now_scroll" id="menu" >


</div  class="up" onclick="return up()">


<div class="heads">



</div class="heads">

<div class="read_document" >
	
<div class="read_document_text"> <!--onload='alert("Размер элемента:" + this.offsetWidth +"x"+ this.offsetHeight)'-->



<?php
//,NULL, NULL, 0, 250000
$filename="document/practical/5/5.htm";

//$homepage=file_get_contents($filename,NULL, NULL, 200000, 400000);

$homepage=file_get_contents($filename);

echo $homepage;
?>	


</div class="read_document_text">


</div class="read_document">


<div class="read_download">



<div class="download_file">

<div class="active_download_file">

<a href="document/practical/5/5.doc"><p>Скачать документ</p></a>

</div class="active_download_file">

</div class="download_file">



<div class="href_presentation">

<div class="active_presentation">

<a href="#"><p>Просмотр презентации</p></a>

</div class="active_presentation">

</div class="href_presentation">



<div class="href_knowledge">

<div class="active_knowledge">

<a href="#"><p>Перейти к Контролю знаний</p></a>

</div class="active_knowledge">

</div class="href_knowledge">



</div class="read_download">



<div class="read_footer">


<div class="read_footer_text">

<p>© <?php echo date('Y')?> lesson.by. Все права защищены. Перепечатка запрещена.</p>

</div class="read_footer_text">


</div class="read_footer">

</div class="read_middle">



</body>


</html>
