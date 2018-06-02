<?php 
	session_start();
	
	include_once 'top_panel/class.top_panel.php';
	
	$position='';
	$href_to='href_query_next(\'Control_know_page.php\')';
	
	$obj=new panel();
	$obj->top_panel($position,$href_to);
	
	$subsession_true=$_SESSION['subsession_true'];
	$mkdir_true=$_SESSION['mkdir_true'];
	$mkdir_false=$_SESSION['mkdir_false'];
	$add_preg_match_false=$_SESSION['add_preg_match_false'];
	$db_subsections_false=$_SESSION['db_subsections_false'];
	
	
	unset($_SESSION['add_preg_match_false']);
	unset($_SESSION['mkdir_false']);
	unset($_SESSION['mkdir_true']);
	unset($_SESSION['subsession_true']);
	unset($_SESSION['db_subsections_false']);
?>
	<html>
	<head>
	  
		<meta http-equiv="content-language" content="ru"/>
		<meta name="author" content="Ковалевич Артём Юрьевич" />
		<meta charset ="utf-8">
		<link rel="stylesheet" type="text/css" href="css/Style.css">
		<link rel="stylesheet" type="text/css" href="css/admin.css">
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
	
		<div class="admin_body">
			<div class="sections_body">
				<div class="sections_tabs">
					<a href="?sections=1" id="block_1"><p>Добавление</p></a>
					<a href="?sections=2" id="block_2"><p>Удаление</p></a>
	<!--				<a href="?sections=3" id="block_3"><p>Редактирование</p></a>
					<a href="?sections=4" id="block_4"><p>Пользователи</p></a>-->
				</div>
				
				<div class="sections_functions">
				
					<div class="add_sections" >
						<form method="post" class="name_block" action="functions_admin.php">
							<div class="main-signin">
								<div class="main-signin__head">
									<p>Добавление нового раздела</p>
								</div>
								<div class="main-signin__middle">
									<div class="middle__form">
										<input type="text" name="add_number_sections"	 placeholder="Номер раздела" autofocus required />			
										<input type="text" name="add_name_sections"	 placeholder="Наименование нового подраздела" autofocus required />		
										<input type="submit" value="Добавить" />
									</div>
								</div>
							</div>
						</form>
					</div>
					
					<div class="add_doc">
						<form method="post" class="name_block" action="functions_admin.php" enctype="multipart/form-data">
							<div class="main-signin">
								<div class="main-signin__head">
									<p>Добавление новой практической/лабораторной работы в подроздел</p>
								</div>
								<div class="main-signin__middle">
									<div class="middle__form">
										<input type="text" name="number_section"	    placeholder="Номер раздела" autofocus required />			
										<input type="text" name="name_subsections_doc"	 		placeholder="Наименование нового подраздела.Например: Лабораторная работа №4" autofocus required />	
										<input type="text" name="number_doc"	 		placeholder="Номер практической/лабораторной работы.Например:1" autofocus required />			
										<input type="text" name="theme_doc"	 		placeholder="Тема" autofocus required />	
										<input type="text" name="target_doc"	 		placeholder="Цель" autofocus required />	
										<input type="text" name="progress_doc"	 		placeholder="Ход работы" autofocus required />	
										<input type="text" name="begin_doc"	 		placeholder="Начало документа(первых два предложения).Примечание:по желанию." />	
										<p>Путь к файлу .htm: </p><input type="file" name="load_htm_doc" 			class="input_file" autofocus required	/>	
										<p>Путь к файлу .doc(docx): </p><input type="file" name="docx_doc"			class="input_file"		 autofocus required />	
										<input type="submit" value="Добавить" />
									</div>
								</div>
							</div>
						</form>
					</div>
					
					<!-- <div class="add_presentation">
						<form method="post" class="name_block" action="functions_admin.php">
							<div class="main-signin">
								<div class="main-signin__head">
									<p>Добавление новой презентации</p>
								</div>
								<div class="main-signin__middle">
									<div class="middle__form">
										<input type="text" name="text_presentation"	 placeholder="Номер новой презентации" autofocus required />			
										<input type="submit" value="Добавить" />
									</div>
								</div>
							</div>
						</form>
					</div> -->
				
				</div>
			</div>
		</div>

	</body>

	</html> 
<?php
	if($add_preg_match_false==true)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Буква не может быть номером раздела.");'; 
		echo '</script>';
	}
	
	if($mkdir_false==true)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Данный номер раздела уже существует.");'; 
		echo '</script>';
	}
	
	if($mkdir_true==true)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Информация была успешно записана.");'; 
		echo '</script>';
	}
	
	if($subsession_true==true)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Заданный подраздел уже существует.");'; 
		echo '</script>';
	}
	
		if($db_subsections_false==true)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Практическая/лабораторная работа уже существует.");'; 
		echo '</script>';
	}
	