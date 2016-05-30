<?
include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();

class inspection
{

private $query_radio;
private $result_radio;

private $query_checkbox;
private $result_checkbox;
private $i;

public function __construct()
    {

	}

public function inspection_tests($name,$task,$test)
{
if(isset($name,$task,$test)==true)
{	

if ($name=="radio_check")
{
    $this->query_radio = "SELECT test_return FROM test_return where number_test=".$test." and number_task=".$task."";
    $this->result_radio = mysql_query($this->query_radio) or die ("Не верный запрос."); 
	
    $rows   = mysql_fetch_array($this->result_radio);
    
     $db_test_return        = $rows['test_return'];
	 echo $db_test_return."<br>";
	 
     if( isset( $_POST['radio_check'] ) )
     {
	 
        if($db_test_return==$_POST['radio_check'])
	    {
		$_COOKIE['i']+=1;
          print_r($_COOKIE);
	    }
	 
     } 
     else
    {
     echo "нет"; 
    }	 

	
}
if ($name=="checkbox_check")
{

    $this->query_radio = "SELECT test_return FROM test_return where number_test=".$test." and number_task=".$task."";
    $this->result_radio = mysql_query($this->query_radio) or die ("Не верный запрос."); 
	
    $rows   = mysql_fetch_array($this->result_radio);
    
     $db_test_return        = $rows['test_return'];
	
}	 

}
}
}

?>