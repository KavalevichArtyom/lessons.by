<?php 
	session_start();
	
	include 'add_section/class.add_section.php';
	include 'add_subsection/class.add_subsection.php';
	include_once 'core/class.connect.php';

	$obj=new connect_db();
	$obj->connect();
	/*Update*/
	$add_number_sections=$_POST['add_number_sections'];
	$add_name_sections=$_POST['add_name_sections'];
	
	$number_section=$_POST['number_section'];
	$name_subsections_doc=$_POST['name_subsections_doc'];
	$number_doc=$_POST['number_doc'];
	$theme_doc=$_POST['theme_doc'];
	$target_doc=$_POST['target_doc'];
	$progress_doc=$_POST['progress_doc'];
	$begin_doc=$_POST['begin_doc'];
					
	
	$preg_match=preg_match('/[a-z]/i',$number_doc);
	
	if(((empty($number_section)==false)&&(empty($name_subsections_doc)==false)&&(empty($number_doc)==false)&&(empty($theme_doc)==false)
	&&(empty($target_doc)==false)&&(empty($progress_doc)==false)
	&&(empty($begin_doc)==false)))
		{				
			if($preg_match==false)
			{	
				$query = "SELECT subsections FROM subsictions where subsections='".$name_subsections_doc."' and sictions='".$number_section."'";
				$result = mysql_query($query) or die ("Не верный запрос."); 
							
				$rows   = mysql_fetch_array($result);
							
				$db_subsections         = $rows['subsections'];
				echo $db_subsections ;
				
				if((isset($db_subsections)==true))
				{	
					$_SESSION['db_subsections_false']=true;
					echo '<script type="text/javascript">'; 
					echo 'window.location.href="developer_dashboard.php";'; 
					echo '</script>';
				}
			
				
				$query = "SELECT sections FROM sections where sections='".$number_section."'";
				$result = mysql_query($query) or die ("Не верный запрос."); 
							
				$rows   = mysql_fetch_array($result);
							
				$db_sections          = $rows['sections'];
				
				
				if(empty($db_sections)==false)
					{	
							$obj=new add_sub();
							$obj->add_subsection($number_section,$name_subsections_doc,$number_doc,$theme_doc,$target_doc,$progress_doc,$begin_doc);		
					}
					else
					{	
						$_SESSION['subsession_true']=true;
						echo '<script type="text/javascript">'; 
						echo 'window.location.href="developer_dashboard.php";'; 
						echo '</script>';
					}
			}
		}
/* 	$preg_match=preg_match('/^[0-9]+[0-9]+[0-9]/',$add_number_sections); */
	if((empty($add_number_sections)==false)&&(empty($add_name_sections)==false))
	{
			$preg_match=preg_match('/[a-z]/i',$add_number_sections);
			
			if($preg_match==false)
			{
					$obj=new add();
					$obj->add_section($add_number_sections,$add_name_sections);
			}
			else
			{		$_SESSION['add_preg_match_false']=true;
					echo '<script type="text/javascript">'; 
					echo 'window.location.href="developer_dashboard.php";'; 
					echo '</script>';
			}
	}
?>
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


	</body>

	</html>
</script>