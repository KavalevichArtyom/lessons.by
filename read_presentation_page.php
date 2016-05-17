
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

<div class="Presentation_active">

</div class="Presentation_active">

</div class="active_button_menu">

</div class="strip">


<div class="goal_read_presentation">

<div class="presentation">

<iframe src="https://onedrive.live.com/embed?cid=970EC56FE5EBEAC5&resid=970EC56FE5EBEAC5%21107702&authkey=AFn2JS_JQdwgJ0U&em=2" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>

</div class="presentation">

</div class="goal_read_presentation">


<div class="goal_read_presentation_panel">


<div class="goal_read_download_file">

<div class="goal_read_active_download_file">

<a href="#"><p>Скачать документ<p></a>

</div class="goal_read_active_download_file">

</div class="goal_read_download_file">


<div class="goal_read_href_presentation">

<div class="goal_read_active_presentation">

<a href="read_presentation_page.php"><p>Просмотр документа по теме</p></a>

</div class="goal_read_active_presentation">


</div class="goal_read_href_presentation">

<div class="goal_read_href_knowledge">



<div class="goal_read_active_knowledge">

<a href="#"><p>Перейти к контролю знаний</p></a>

</div class="goal_read_active_knowledge">


</div class="goal_read_href_knowledge">


</div class="goal_read_presentation_panel">


<div class="footer_read_presentation">

<div class="read_footer_text">

<p>© 2016 lesson.by. Все права защищены. Перепечатка запрещена.</p>

</div class="read_footer_text">


</div class="footer_read_presentation">

</body>

</html>
