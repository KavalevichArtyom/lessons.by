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

public function read_result_users_test()
{
    $query  = "SELECT id, number_test,fio_users,queryes, correct,not_correct,value ,time FROM read_result_users_test";
    $result = mysql_query($query) or die ("Не верный запрос."); 

    $rows   = mysql_fetch_array($result);
    
     $db_number_test        = $rows['number_test'];
	 $db_fio_users          = $rows['fio_users'];
	 $db_queryes            = $rows['queryes'];
	 $db_correct            = $rows['correct'];
	 $db_not_correct        = $rows['not_correct'];
	 $db_time               = $rows['time'];
	 $db_value              = $rows['value'];
	  
	 
/* echo $db_number_test.'<br>';
echo $db_fio_users.'<br>';
echo $db_queryes.'<br>';
echo $db_correct.'<br>';
echo $db_not_correct.'<br>';
echo $db_time.'<br>'; */
	 
echo '<div class="goal_result_head">';
echo '<p>Результаты прохожденрия Теста №'.$db_number_test.'</p>';
echo '</div class="goal_result_head">';
echo '<div class="goal_result_fio">';
echo '<p>'.$db_fio_users.'</p>';
echo '</div class="goal_result_fio">';
echo '<div class="goal_result_panel">';
echo '<div class="goal_result_questions">';
echo '<p>Вопросов: '.$db_queryes.'</p>';
echo '</div class="goal_result_questions">';
echo '<div class="goal_result_correct">';
echo '<p>Верных: '.$db_correct.'</p>';
echo '</div class="goal_result_correct">';
echo '<div class="goal_result_not_correct">';
echo '<p>Не верных: '.$db_not_correct.'</p>';
echo '</div class="goal_result_not_correct">';
echo '<div class="goal_result_time">';
echo '<p>Время: '.$db_time.'</p>';
echo '</div class="goal_result_left">';
echo '</div class="goal_result_panel">';
echo '<div class="goal_result_grade_bottom">';
echo '<div class="goal_result_grade_text">';
echo '<p>Оценка</p>';
echo '</div class="goal_result_grade_text">';
echo '<div class="goal_result_grade">';
echo '<p>'.$db_value.'</p>';
echo '</div class="goal_result_grade">';
echo '</div class="goal_result_grade_bottom">';
}

}
?>