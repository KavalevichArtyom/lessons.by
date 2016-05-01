
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
<body class="id1">

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

<div class="About_the_site_active">

</div class="About_the_site_active">


</div class="active_button_menu">

</div class="strip"><!--Закрытие полосы активной страницы -->




<div class="image"><!--Вывод изображения -->

<img src="Image/1(4).jpg"></img>

<div class="image_text">

<p>Главная</p>

</div class="image_text">

</div class="image">




<div class="goal_index">

<div class="goal_head">

<p>Цель сайта/<p>

</div class="goal_head">

<div class="goal_text">

<p>Предостовление для обучения информации, презентации, тестов по предмету "Наименование предмета".<p>

</div class="goal_text">

</div class="goal_index">


<div class="footer_index">


<!--<div class="footer_link" >

<p><a href="Tema_page.php">Темы</a></p>

</div class="footer_link" id="it_image">
-->

<div class="footer_text">

<p>© 2016 lesson.by. Все права защищены. Перепечатка запрещена.</p>

</div class="footer_text">


</div class="footer_index">



</body>

</html>
