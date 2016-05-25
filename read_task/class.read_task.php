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
	 
	$task+=1;
	
	$query  = "SELECT id, number_test,query,href_image,response_options,href_query,number_task,know_response FROM test_query where number_test=".$test." and number_task=".$task."";
    $result = mysql_query($query) or die ("Не верный запрос."); 

    $rows   = mysql_fetch_array($result);
	$db_href_query_next         = $rows['href_query'];
	
	if(empty($db_href_query_next)==true)
	{
	$db_href_query_next="http://lessons.by/Control_know_page.php";
	}

	 
	 
	 
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
echo '<div class="query_know_options">';
echo '<p>'.$db_response_options.'</p>';
echo '</div class="query_know_options">';
echo '<form method="POST" class="form_return">';
echo '<input type="text" class="text_write">';
echo '<a href='.$db_href_query_next.' class="text_add">Далее</a>';
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