<?php
include_once 'core/class.connect.php';
include_once 'class.check_cookie.php';

$obj=new connect_db();
$obj->connect();

class inspection
{

private $query_radio;
private $result_radio;

private $query_checkbox;
private $result_checkbox;
public $correct_true;

public function __construct()
    {
	}

public function inspection_tests($name,$task,$test)
{

if(isset($name,$task,$test)==true)
{
   if ($name=="radio_check")	
   {
    $this->query_radio = "SELECT count(number_test) as count_test FROM test_return where number_test=".$test."";
    $this->result_radio = mysql_query($this->query_radio) or die ("Не верный запрос."); 
	
    $rows   = mysql_fetch_array($this->result_radio);
    
     $db_count_test        = $rows['count_test'];
	
	$_SESSION['task']=$db_count_test;
   
   
    $this->query_radio = "SELECT test_return FROM test_return where number_test=".$test." and number_task=".$task."";
    $this->result_radio = mysql_query($this->query_radio) or die ("Не верный запрос."); 
	
    $rows   = mysql_fetch_array($this->result_radio);
    
     $db_test_return        = $rows['test_return'];
	 echo $db_test_return."<br>";
	 
	 
     if( isset( $_POST['radio_check'] ) )
     {
	 
        if($db_test_return==$_POST['radio_check'])
	    {	

		
		$obj=new check();
        $obj->check_cookie();
		echo $_SESSION['correct'];
        }
       	
     	}
		
     }
	
}

if(isset($name,$task,$test)==true)
{
     if ($name=="checkbox_check")
      {


	$query  = "SELECT count(number_options) as numbers_options  FROM test_options where number_test=".$test." and number_task=".$task."";
    $result = mysql_query($query) or die ("Не верный запрос."); 

    $rows   = mysql_fetch_array($result);
	$db_numbers_options         = $rows['numbers_options'];

    $this->query_radio = "SELECT test_return FROM test_return where number_test=".$test." and number_task=".$task."";
    $this->result_radio = mysql_query($this->query_radio) or die ("Не верный запрос."); 
	
    $rows   = mysql_fetch_array($this->result_radio);
    
     $db_test_return        = $rows['test_return'];
	 echo $db_test_return."<br>";
	 
	 $text_options;
	 
	 for($i=1,$j=0;$i<=$db_numbers_options;$i++,$j++)
	 
	 {
	 if (isset($_POST['checkbox_'.$i.'']))
     {  
     echo " gut <br>";  
	 
	 $text_options=$text_options."$i";
     }
	 else
	 {
	 echo " gg <br>";
	 }
	 
     }
	if ($db_test_return==$text_options)
	{
	 
	 	$obj=new check();
        $obj->check_cookie();
		
		echo $_SESSION['correct'];
		
	
	}
}
}

if(isset($name,$task,$test)==true)
{
   if ($name=="text")	
   {

    $this->query_radio = "SELECT test_return FROM test_return where number_test=".$test." and number_task=".$task."";
    $this->result_radio = mysql_query($this->query_radio) or die ("Не верный запрос."); 
	
    $rows   = mysql_fetch_array($this->result_radio);
    
     $db_test_return        = $rows['test_return'];
	 echo $db_test_return."<br>";
	 
     if( isset( $_POST['text'] ) )
     {
	 
        if($db_test_return=$_POST['text'])
	    {	

		
		$obj=new check();
        $obj->check_cookie();
		echo $_SESSION['correct'];
        }
       	
     	}
		
     }
	
}

if(isset($name,$task,$test)==true)
{
     if ($name=="conformity")
      {


	$query  = "SELECT count(number_options) as numbers_options  FROM test_options where number_test=".$test." and number_task=".$task." and number_options>0";
    $result = mysql_query($query) or die ("Не верный запрос."); 

    $rows   = mysql_fetch_array($result);
	$db_numbers_options         = $rows['numbers_options'];

    $this->query_radio = "SELECT test_return FROM test_return where number_test=".$test." and number_task=".$task."";
    $this->result_radio = mysql_query($this->query_radio) or die ("Не верный запрос."); 
	
    $rows   = mysql_fetch_array($this->result_radio);
    
     $db_test_return        = $rows['test_return'];
	 echo $db_test_return."<br>";
	 
	 $text_options;
	 
	 for($i=1,$j=0;$i<=$db_numbers_options;$i++,$j++)
	 
	 {
	 if (isset($_POST['text_'.$i.'']))
     {  
     echo " gut <br>";  
	 
	 $text_options=$text_options.''.+$_POST['text_'.$i.''].'';
	 echo $text_options;
     }
	 else
	 {
	 echo " gg <br>";
	 }
	 
     }
	if ($db_test_return==$text_options)
	{
	 echo "ot";
	 	$obj=new check();
        $obj->check_cookie();
		
		echo $_SESSION['correct'];
		
/* 		$query_radio = "INSERT INTO read_result_users_test(number_test) VALUE ('".$test."')";
	    mysql_query($query_radio) or die ("Не верный запрос."); */
	
	}
}
}

}
}


?>