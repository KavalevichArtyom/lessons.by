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
	jQuery(function(f){
			var element = f('#blfix');
			f(window).scroll(function(){
			   
			element['fade'+ (f(this).scrollTop() > 400 ? 'In': 'Out')](1); 
				
			});
		}); 
			
			
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

			$(document).ready(function(){
							$('#menu2').stickyfloat({ duration: 400 });	
							$('#menu').stickyfloat({ duration: 400 });				
						});	
</script>  
	
</head>
<body>

<?php
	//Подключение к базе данных
	include_once 'core/news.php';
	include_once 'core/class.siction.php';
	include_once 'class.read_db_theme.php';
	include_once 'left_panel_section/class.left_panel_section.php';
	include_once 'search/class.search.php';

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

	<?php
		$obj=new left_panel();
		$obj->left_panel_section();
	?>

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


</div class="menu_capcion_head_active_page">

<div class="active_tema_page_1">

<ul class="theme">

<?php

$search=$_GET['search'];

$_SESSION['search']=$search;

if(isset($search)==false)
	{
		$obj=new theme();
		$obj->read_db_theme($section);
	}
else
	{
		$obj=new search();
		$obj->check_search($search);
	}
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
