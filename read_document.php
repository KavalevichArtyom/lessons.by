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
	include_once 'left_panel_section/class.left_panel_section.php';

	$page=$_GET['page'];
	$section=$_GET['section'];
	$practice=$_GET['practice'];
	$laboratory=$_GET['laboratory'];
	
	include_once 'top_panel/class.top_panel.php';	
	
	$position='Tema_active';
	$href_to='href_query_next(\'window_autorize.php\')';
	
	$obj=new panel();
	$obj->top_panel($position,$href_to);
?>

<!--________________________________________________________________END_NEWS_TOPIC_____________________________________________________________________________-->

<div class="read_middle">



<div class="up" onclick="return up()" id="blfix">

<div class="now_scroll" id="menu" >

<a href="#" ><p><img src="Image/scroll.png">Наверх</p></img></a>

</div class="now_scroll" id="menu" >


</div  class="up" onclick="return up()" id="blfix">


<div class="heads">
	<?php
		$obj=new left_panel();
		$obj->left_panel_section();
	?>

</div class="heads">

<div class="read_document" >
	
<div class="read_document_text"> 

<?php
$obj=new doc();
$obj->read_doc($page,$section,$practice,$laboratory);
?>	

</div class="read_document_text">


</div class="read_document">


<div class="read_download">





<?php
$obj=new doc();
$obj->download_doc($page,$section,$practice,$laboratory); 
?>	


<?php
$obj=new doc();
$obj->href_presentation($page,$section,$practice,$laboratory); 
?>	


<?php
$obj=new doc();
$obj->href_know_control($page,$section,$practice,$laboratory); 
?>	

<?php
$obj=new doc();
$obj->autorize_false(); 
?>	



</div class="read_download">



<div class="read_footer">


<div class="read_footer_text">

<p>© <?php echo date('Y')?> lesson.by. Все права защищены. Перепечатка запрещена.</p>

</div class="read_footer_text">


</div class="read_footer">

</div class="read_middle">


</body>


</html>
