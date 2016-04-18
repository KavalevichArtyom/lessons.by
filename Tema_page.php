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

<p>ПОИСК</p>	

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

<a href="active_tema_page_1.php"><p>Наименование темы/раздела</p></a>

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



<div class="menu_forums_right_news" id="menu_forums_right_news_1">

<div class="menu_forums_right_news_img">

<a href="#"><img src="http://cdn.wccftech.com/wp-content/uploads/2016/03/NVIDIA-GeForce-GTX-1080-8-Pin-Connector-125x125.jpg"></a>

</div class="menu_forums_right_news_img">


<div class="menu_forums_right_news_text_href">

<a href="http://wccftech.com/rumor-nvidia-pascal-gtx-1080-gddr5x-gtx-1070-f-gddr5/"><p>Nvidia Pascal GTX 1080 Features 8GB GDDR5X & 384-320GB/s Of Bandwidth, GTX 1070 Fea…</p></a>

</div class="menu_forums_right_news_text_href">


<div class="menu_forums_right_news_text_time">

<p>April 11, 2016 2:27 pm</p>

</div class="menu_forums_right_news_text_time">


<div class="menu_forums_right_news_text">

<p>According to the latest whispers Nvidia has allegedly designed two reference PCBs with GDDR5X and GDDR5 compatibility f…</p>

</div class="menu_forums_right_news_text">

</div class="menu_forums_right_news" id="menu_forums_right_news_1">



<div class="menu_forums_right_news" id="menu_forums_right_news_2">

<div class="menu_forums_right_news_img">

<a href="http://wccftech.com/nvidia-evga-gtx-960-ssc-amd-xfx-r9-380-oc/"><img src="http://cdn.wccftech.com/wp-content/uploads/2016/04/IMG_3150-125x125.jpg"></a>

</div class="menu_forums_right_news_img">


<div class="menu_forums_right_news_text_href">

<a href="http://wccftech.com/nvidia-evga-gtx-960-ssc-amd-xfx-r9-380-oc/"><p>AMD Radeon R9 380 vs Nvidia GeForce GTX 960 – Finding The 1080p Bang For Buck Champ</p></a>

</div class="menu_forums_right_news_text_href">


<div class="menu_forums_right_news_text_time">

<p>April 9, 2016 3:35 pm</p>

</div class="menu_forums_right_news_text_time">


<div class="menu_forums_right_news_text">

<p>With us being on the cusp of the Pascal and Polaris launch it may be hard to understand why we would be looking at how t…</p>

</div class="menu_forums_right_news_text">

</div class="menu_forums_right_news" id="menu_forums_right_news_2">


<div class="menu_forums_right_news" id="menu_forums_right_news_3">

<div class="menu_forums_right_news_img">

<a href="http://wccftech.com/nvidia-pascal-gp104-gpu-leaked/"><img src="http://cdn.wccftech.com/wp-content/uploads/2014/09/NVIDIA-GeForce-Maxwell-GM204-Die-Shot-125x125.jpg"></a>

</div class="menu_forums_right_news_img">


<div class="menu_forums_right_news_text_href">

<a href="http://wccftech.com/nvidia-pascal-gp104-gpu-leaked/"><p>NVIDIA Pascal GP104 GPU Pictures Leaked – Built To Power 8 GB GeForce Cards, GP106 Also Shot Up Close</p></a>

</div class="menu_forums_right_news_text_href">


<div class="menu_forums_right_news_text_time">

<p>April 8, 2016 6:44 pm</p>

</div class="menu_forums_right_news_text_time">


<div class="menu_forums_right_news_text">

<p>A few hours ago, we reported that NVIDIA is expected to launch their consumer grade GeForce graphics cards at Computex. …</p>

</div class="menu_forums_right_news_text">

</div class="menu_forums_right_news" id="menu_forums_right_news_3">


<div class="menu_forums_right_news" id="menu_forums_right_news_4">

<div class="menu_forums_right_news_img">

<a href="http://wccftech.com/nvidia-geforce-gtx-1080-1070-computex/"><img src="http://cdn.wccftech.com/wp-content/uploads/2016/04/5124c8b218f88-125x125.jpg"></a>

</div class="menu_forums_right_news_img">


<div class="menu_forums_right_news_text_href">

<a href="http://wccftech.com/nvidia-geforce-gtx-1080-1070-computex/"><p>NVIDIA GeForce GTX 1080 and GeForce GTX 1070 With Pascal GPUs Under Full Production – Rumors Point to Computex Reveal</p></a>

</div class="menu_forums_right_news_text_href">


<div class="menu_forums_right_news_text_time">

<p>April 8, 2016 7:58 am</p>

</div class="menu_forums_right_news_text_time">


<div class="menu_forums_right_news_text">

<p>Reports from APAC based sources suggest that NVIDIA already has production of their Pascal based gaming GPUs in full sw…</p>

</div class="menu_forums_right_news_text">

</div class="menu_forums_right_news" id="menu_forums_right_news_4">


</div class="menu_forums_right" >
<!--________________________________________________________________END_NEWS_TOPIC_____________________________________________________________________________-->
<!-- Центральная полоса новостей -->

<div class="menu_capcion">

<div class="menu_capcion_head">

<p>Наименование блока</p>

</div class="menu_capcion_head">

<div class="menu_capcion_img">

<a href="http://wccftech.com/rumor-nvidia-pascal-gtx-1080-gddr5x-gtx-1070-f-gddr5/"><img src="http://cdn.wccftech.com/wp-content/uploads/2016/03/NVIDIA-GeForce-GTX-1080-8-Pin-Connector-125x125.jpg"></a>

</div class="menu_capcion_img">

<div class="menu_capcion_href">

<a href="http://wccftech.com/rumor-nvidia-pascal-gtx-1080-gddr5x-gtx-1070-f-gddr5/"><p>Nvidia Pascal GTX 1080 Features 8GB GDDR5X & 384-320GB/s Of Bandwidth, GTX 1070 Fea…</p></a>

</div class="menu_capcion_href">

<div class="menu_capcion_text">

<p>According to the latest whispers Nvidia has allegedly designed two reference PCBs with GDDR5X and GDDR5 compatibility f…</p>

</div class="menu_capcion_text">

<div class="menu_capcion_time">

<p>April 11, 2016 2:27 pm</p>

</div class="menu_capcion_time">

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
