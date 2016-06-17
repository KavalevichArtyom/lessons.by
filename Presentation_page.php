
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
	include_once 'left_panel_section/class.left_panel_section.php';



	include_once 'top_panel/class.top_panel.php';	
	
	$position='Presentation_active';
	$href_to='href_query_next(\'window_autorize.php\')';
	
	$obj=new panel();
	$obj->top_panel($position,$href_to);
?>

<div class="goal_presentation">

<!--________________________________________________________________goal_presentation_left_____________________________________________________________________________-->

	<div class="goal_presentation_left">

	<?php
		$obj=new left_panel();
		$obj->left_panel_section();
	?>

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
