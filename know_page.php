﻿
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

<div class="number_test">

<p>Задание №1</p>

</div class="number_test">


<div class="query_know">


<div class="query_know_head">

<p>
Вопрос:
</p>

</div class="query_know_head">

<div class="query_know_body">

<p>
Чему равно состояние флага CF после выполнения команды вычитания?
</p>

</div class="query_know_body">

<div class="query_know_response">

<p>
Выберите один из 2 вариантов ответа:
</p>

</div class="query_know_response">

<div class="query_know_options">

<p>
1) 0<br />
2) 1
</p>

</div class="query_know_options">

<form method="POST" class="form_return">

<input type="text" class="text_write">

<a href="#" class="text_add">Отправить</a>

</form>

</div class="query_know">

<div class="image_know">

<img src="/Image/gg.png"></img>

</div class="image_know">


</div class="goal_know_center">

</div class="goal_know">

<div class="footer_know">


<div class="footer_text">

<p>© 2016 lesson.by. Все права защищены. Перепечатка запрещена.</p>

</div class="footer_text">


</div class="footer_know">


</body>

</html>