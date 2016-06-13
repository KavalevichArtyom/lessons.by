<?php 
	session_start();
?>
	<html>
	<head>
	  
		<meta http-equiv="content-language" content="ru"/>
		<meta name="author" content="Ковалевич Артём Юрьевич" />
		<meta charset ="utf-8">
		<link rel="stylesheet" type="text/css" href="css/Style.css">
		<script src="JS/JavaScript.js"></script>
		
	</head>
	<body>

<?php
	
	include_once 'core/class.siction.php';
	include_once 'core/news.php';
	include_once 'read_tests/class.read_tests.php';	
	
	/* 		$_SESSION['insert_into_true']=true; */
	unset($_SESSION['insert_into_true']);
	
	
?>


	</body>
	</html>