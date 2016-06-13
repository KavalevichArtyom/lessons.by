
<html>
<head>
  
    <meta http-equiv="content-language" content="ru"/>
    <meta name="author" content="Ковалевич Артём Юрьевич" />
    <meta charset ="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
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
<body>

<?php

	include_once 'core/class.siction.php';
	include_once 'core/news.php';
	include_once 'read_presentations/class.read_presentations.php';



	include_once 'top_panel/class.top_panel.php';	
	
	$position='Presentation_active';
	$href_to='href_query_next(\'window_autorize.php\')';
	
	$obj=new panel();
	$obj->top_panel($position,$href_to);
?>

<div class="goal_presentation">

<!--________________________________________________________________goal_presentation_left_____________________________________________________________________________-->

	<div class="goal_presentation_left">

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

	</div class="goal_presentation_left">



	<div class="goal_presentation_center">

	<ul id="menu2">

	<?php

		$obj=new contents();
		$obj->read_presentations();

	?>

	</ul id="menu2">

	</div class="goal_presentation_center">


	<!--________________________________________________________________NEWS_TOPIC_____________________________________________________________________________-->

	<div class="menu_forums_right" >

	<div class="menu_forums_right_head">

	<p>Библиотека</p>

	</div class="menu_forums_right_head">

	<?php
	
		echo сonclusion_news();//Вывод новостей
	
	?>

	</div class="menu_forums_right" >



	<div class="footer_presentation">

	<div class="footer_text">

	<p>© 2016 lesson.by. Все права защищены. Перепечатка запрещена.</p>

	</div class="footer_text">


	</div class="footer_presentation">

	</div class="goal_presentation">

</body>

</html>
