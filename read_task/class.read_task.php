<?
include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();

class contents
{

private $query;
private $result;
private $db_count_id;

private $count_id_query;
private $count_id;

public function __construct()
    {

	}

public function read_task_one($task,$test)
{
    $query  = "SELECT id, number_test,query,href_image,response_options,href_query,number_task,know_response FROM test_query where number_test=".$test." and number_task=".$task."";
    $result = mysql_query($query) or die ("Не верный запрос."); 

    $rows   = mysql_fetch_array($result);
    
     $db_number_test        = $rows['number_test'];
	 $db_query              = $rows['query'];
	 $db_href_image         = $rows['href_image'];
	 $db_response_options   = $rows['response_options'];
	 $db_href_query         = $rows['href_query'];
	 $db_number_task        = $rows['number_task'];
	 $db_know_response      = $rows['know_response'];
	
	$query  = "SELECT block_read  FROM test_return where number_test=".$test." and number_task=".$task."";
    $result = mysql_query($query) or die ("Не верный запрос."); 

    $rows   = mysql_fetch_array($result);
	$db_block_read         = $rows['block_read'];
	 
	 
echo '<div class="number_test">';
echo '<p>Задание '.$db_number_task.'</p>';
echo '</div class="number_test">';
echo '<div class="query_know">';
echo '<div class="query_know_head">';
echo '<p>Вопрос:</p>';
echo '</div class="query_know_head">';
echo '<div class="query_know_body">';
echo '<p>'.$db_query.'</p>';
echo '</div class="query_know_body">';
echo '<div class="query_know_response">';
echo '<p>'.$db_know_response.'</p>';
echo '</div class="query_know_response">';

    $task_1=$task;
	$task_1+=1;
	
	$query  = "SELECT id, number_test,query,href_image,response_options,href_query,number_task,know_response FROM test_query where number_test=".$test." and number_task=".$task_1."";
    $result = mysql_query($query) or die ("Не верный запрос."); 

    $rows   = mysql_fetch_array($result);
	$db_href_query_next         = $rows['href_query'];
	
	if(empty($db_href_query_next)==true)
	{
	$db_href_query_next="http://lessons.by/window_load/window_load.php";
	}


echo '<form method="post" class="form_return" >';

echo '<div class="query_know_options">';

if(isset($db_block_read)==true)
{

if ($db_block_read=="0")
{
echo '<input type="text" class="text_write">';
}

if ($db_block_read=="1")
{

	$query  = "SELECT count(number_options) as numbers_options  FROM test_options where number_test=".$test." and number_task=".$task."";
    $result = mysql_query($query) or die ("Не верный запрос."); 

    $rows   = mysql_fetch_array($result);
	$db_numbers_options         = $rows['numbers_options'];


	$query  = "SELECT number_options, response_options  FROM test_options where number_test=".$test." and number_task=".$task."";
    $result = mysql_query($query) or die ("Не верный запрос."); 

	
	for($i=0;$i<$db_numbers_options;$i++){
	
    $rows   = mysql_fetch_array($result);
	
	$db_number_options         = $rows['number_options'];
	$db_response_options       = $rows['response_options'];
	

	echo '<label><input type="radio" name="radio_check" value="'.$db_number_options.'" 	/>'.$db_response_options.'<br></label>';
	
	
	}	

}
if ($db_block_read=="2")

{

	$query  = "SELECT count(number_options) as numbers_options  FROM test_options where number_test=".$test." and number_task=".$task."";
    $result = mysql_query($query) or die ("Не верный запрос."); 

    $rows   = mysql_fetch_array($result);
	$db_numbers_options         = $rows['numbers_options'];


	$query  = "SELECT number_options, response_options  FROM test_options where number_test=".$test." and number_task=".$task."";
    $result = mysql_query($query) or die ("Не верный запрос."); 

	
	for($i=0;$i<$db_numbers_options;$i++){
	
    $rows   = mysql_fetch_array($result);
	
	$db_number_options         = $rows['number_options'];
	$db_response_options       = $rows['response_options'];
	
	echo '<label><input type="checkbox" name="checkbox_check" value="'.$db_number_options.'" />'.$db_response_options.'<br></label>';
	
	}	

}

if ($db_block_read=="3")

{

	$query  = "SELECT count(number_options) as numbers_options  FROM test_options where number_test=".$test." and number_task=".$task."";
    $result = mysql_query($query) or die ("Не верный запрос."); 

    $rows   = mysql_fetch_array($result);
	$db_numbers_options         = $rows['numbers_options'];


	$query  = "SELECT number_options, response_options  FROM test_options where number_test=".$test." and number_task=".$task."";
    $result = mysql_query($query) or die ("Не верный запрос."); 

	
	for($i=0;$i<$db_numbers_options;$i++){
	
    $rows   = mysql_fetch_array($result);
	
	$db_number_options         = $rows['number_options'];
	$db_response_options       = $rows['response_options'];
	
	echo '<label><input type="checkbox" name="radio" id="number_checkbox_'.$db_number_options.'" class="radio" />'.$db_response_options.'<br></label>';
	
	}	

}
}

echo '</div class="query_know_options">';	




echo '<input type="submit" class="text_add"  value="Далее" ></input>';
/* echo '<a href='.$db_href_query_next.' class="text_add">Далее</a>'; */
echo '</form>';
echo '</div class="query_know">';

if(empty($db_href_image)!==true)
{
echo '<div class="image_know">';
echo '<img src="'.$db_href_image.'"></img>';
echo '</div class="image_know">';
}	 
	 
    }	
}


?>