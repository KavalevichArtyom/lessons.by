<?php
	include_once 'core/class.connect.php';

	$obj=new connect_db();
	$obj->connect();

class contents
	{

	private $query;
	private $result;
	private $db_count_id;

public function __construct()
    {
	

	}

public function read_tests()
{
	$this->query  = "SELECT COUNT(id) as count_id FROM read_tests";
    $this->result = mysql_query($this->query) or die ("Не верный запрос."); 
	
	$rows   = mysql_fetch_array($this->result);
	
	$this->db_count_id         = $rows['count_id'];


	$this->query  = "SELECT id,test_number,test_image,test_text,circs_test,href_test FROM read_tests";
    $this->result = mysql_query($this->query) or die ("Не верный запрос."); 
	
	for($i=0;$i<$this->db_count_id;$i++){	

    $rows   = mysql_fetch_array($this->result);
    
     $db_test_number         = $rows['test_number'];
	 $db_test_image   		 = $rows['test_image'];
	 $db_test_text      	 = $rows['test_text'];
	 $db_circs_test    		 = $rows['circs_test'];
	 $db_href_test     		 = $rows['href_test'];

	 
/* 	 echo $db_test_number."<br>";
	 echo $db_test_image."<br>";
	 echo $db_test_text."<br>";
	 echo $db_circs_test."<br>";
	 echo $db_href_test."<br>"; */

	 
	echo "<li>";
		echo '<div class="test">';
		echo '<div class="test_number">';
		echo '<p>Тест №'.$db_test_number.'</p>';
		echo '</div class="test_number">';
		echo '<div class="test_image">';
		echo '<img src="'.$db_test_image.'"></img>';
		echo '</div class="test_image">';
		echo '<div class="test_head_text">';
		echo '<p>Тестирование знаний по следующим работам</p>';
		echo '</div class="test_head_text">';
		echo '<div class="test_text">';
		echo '<p>';
		echo $db_test_text;
		echo '</p>';
		echo '</div class="test_text">';
		echo '<div class="circs_test">';
		echo '<p>';
		echo 'Время прохождения теста ограничена 30 минутами.<br /> Количество вопросов в тесте -'.$db_circs_test.'.';
		echo '</p>';
		echo '</div class="circs_test">';
		echo '<div class="href_test">';
		echo '<a  onclick="block(\'write_password\')"><p>Пройти тест</p></a>';
		echo '</div class="href_test">';
		echo '</div class="test">';
	echo "</li>";
	 
    }	
}



}