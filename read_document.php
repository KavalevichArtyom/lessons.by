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
jQuery(function(f){
    var element = f('#blfix');
    f(window).scroll(function(){
       
	element['fade'+ (f(this).scrollTop() > 400 ? 'In': 'Out')](1); 
		
    });
}); 
</script>

<script type="text/javascript">
$(document).ready(function(){
   $('.heads_buttom').hide()
    $('.heads_buttom').click(function(){
        $('.heads_table_and_heads_buttom_up').slideToggle("slow");
		$('.heads_buttom').hide()
    })
	$('.heads_buttom_up').click(function(){
           $('.heads_table_and_heads_buttom_up').hide()
		   $('.heads_buttom').slideToggle("slow");
    })
})

$(document).ready(function() {
 $("#menu1 ul").hide();
 $("#menu1 li span").click(function() { $(this).next().slideToggle("normal"); });
});
</script>     
	
	<script>

	$(document).ready(function(){
					$('#menu2').stickyfloat({ duration: 400 });	
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

include_once 'class.read_doc.php';
include_once 'core/class.siction.php';

$page=$_GET['page'];
$section=$_GET['section'];
$practice=$_GET['practice'];
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


<!--________________________________________________________________END_NEWS_TOPIC_____________________________________________________________________________-->

<div class="read_middle">



<div class="up" onclick="return up()" id="blfix">

<div class="now_scroll" id="menu" >

<a href="#" ><p><img src="Image/scroll.png">Наверх</p></img></a>

</div class="now_scroll" id="menu" >


</div  class="up" onclick="return up()" id="blfix">


<div class="heads">

<div class="heads_block" id="menu2">

<div class="heads_name">

<p>Занятия<p>

</div class="heads_name">

<div class="heads_search">
        <form>
                
				<input type="text" class="search rounded" >
				<input type="button" value="Искать...">
				
        </form>
</div class="heads_search">



<div class="heads_buttom">

<div class="heads_buttom_size">

<img src="Image/9.png"></img>

<p>Развернуть</p>

</div class="heads_buttom_size">

</div class="heads_buttom">

<div class="heads_table_and_heads_buttom_up">

<div class="heads_table">

<ul id="menu1">
<?php

$obj=new siction();
$obj->сonclusion_siction();

?>
</ul id="menu1">

</div class="heads_table">

<div class="heads_buttom_up">

<div class="heads_buttom_size">

<img src="Image/8.png"></img>

<p>Свернуть</p>

</div class="heads_buttom_size">

</div class="heads_buttom_up">

</div class="heads_table_and_heads_buttom_up">

</div class="heads_block" id="menu2">

</div class="heads">

<div class="read_document" >
	
<div class="read_document_text"> 

<?php
$obj=new doc();
$obj->read_doc($page,$section,$practice);
?>	

</div class="read_document_text">


</div class="read_document">


<div class="read_download">



<div class="download_file">

<div class="active_download_file">

<?php
$obj=new doc();
$obj->download_doc($page,$section,$practice); 
?>	

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
