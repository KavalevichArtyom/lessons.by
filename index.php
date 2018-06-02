
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


<?
	include_once 'top_panel/class.top_panel.php';	
	
	$position='About_the_site_active';
	$href_to='href_query_next(\'window_autorize.php\')';
	
	$obj=new panel();
	$obj->top_panel($position,$href_to);
?>


	<div class="image"> <!--Вывод изображения-->

	<img src="Image/1(4).jpg"></img>

	<div class="image_text">

	<p></p>

	</div class="image_text">

	</div class="image">



	<div class="goal_index">

	<div class="goal_head">


	</div class="goal_head">

	<div class="goal_text">

	<p>Сайт предоставляет инфомацию для изучения дисциплины «Микропроцессорные средства и системы».<p>

	</div class="goal_text">

	</div class="goal_index">


	<div class="footer_index">


	<div class="footer_text">
	
	<p>© <?echo date('Y')?> lesson.by. Все права защищены. Перепечатка запрещена.</p>

	</div class="footer_text">


	</div class="footer_index">



</body>
<?php
if (($_SESSION['autorize_true']!==true)||(isset($_SESSION['autorize_true'])==false))
{
	$_SESSION['autorize_true']=0;
}
?>	
</html>
