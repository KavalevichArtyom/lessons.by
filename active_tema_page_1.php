<html>
<head>
  
    <meta http-equiv="content-language" content="ru"/>
    <meta name="author" content="Ковалевич Артём Юрьевич" />
    <meta charset ="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<script src="JS/JavaScript.js"></script>
	
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
	
	
	<script type="text/javascript">
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

	$section=$_GET['section'];

	include_once 'top_panel/class.top_panel.php';	
	
	$position='Tema_active';
	$href_to='href_query_next(\'window_autorize.php\')';
	
	$obj=new panel();
	$obj->top_panel($position,$href_to);
?>


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

<div class="menu_capcion_head_active_page">

<p>Тема №1</p>

</div class="menu_capcion_head_active_page">

<div class="active_tema_page_1">

<ul class="theme">
<?php

$obj=new theme();
$obj->read_db_theme($section);

?> 	


</ul class="theme">




</div class="active_tema_page_1">




</div class="menu_capcion">


</div class="goal_child" >

</div class="goal" >



<div class="footer">

<div class="footer_text">

<p>© <?php echo date('Y')?> lesson.by. Все права защищены. Перепечатка запрещена.</p>

</div class="footer_text">


</div class="footer">

</body>


</html>
