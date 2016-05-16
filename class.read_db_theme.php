<?php
include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();


class theme
{

private $db_sum;
private $query;
private $result;
private $rows;
private $name;

public function read_db_theme($section)
{
    $this->query  = 'SELECT count(name) as sum FROM read_doc where sections='.$section.'';
    $this->result = mysql_query($this->query) or die ("Не верный запрос.");

    $this->rows   = mysql_fetch_array($this->result);
	
	$this->db_sum = $this->rows['sum'];


    $this->query  = 'SELECT name, practical_work, theme, target, progress, text, href_theme FROM read_doc where sections='.$section.' order by name';
    $this->result = mysql_query($this->query) or die ("Не верный запрос.");
	
    for($i=0;$i<$this->db_sum;$i++){

    $this->rows   = mysql_fetch_array($this->result);
    
    $db_practical_work  = $this->rows['practical_work'];
	$db_theme           = $this->rows['theme'];
	$db_target          = $this->rows['target'];
	$db_progress        = $this->rows['progress'];
	$db_text            = $this->rows['text'];
	$db_href_theme      = $this->rows['href_theme'];
	$db_name            = $this->rows['name'];
	
	echo '<li>';
	
	echo '<div class="active_tema_page_1_section" >';
	
    echo '<div class="active_tema_page_1_section_theme">';

    echo '<p>'.$db_practical_work.'<p>';

    echo '</div class="active_tema_page_1_section_theme">';


    echo '<div class="active_tema_page_1_section_head">';

    echo '<p>'.$db_theme.'</p>';

    echo '</div class="active_tema_page_1_section_head">';

    echo '<div class="active_tema_page_1_section_target">';

    echo '<p>'.$db_target.'</p>';

    echo '</div class="active_tema_page_1_section_target">';

    echo '<div class="active_tema_page_1_section_progress">';

    echo '<p>'.$db_progress.'</p>';

    echo '</div class="active_tema_page_1_section_progress">';

    echo '<div class="active_tema_page_1_section_text">';
 

    echo '<p>'.$db_text.'</p>';
 
    echo '</div class="active_tema_page_1_section_text">';

    echo '<div class="active_tema_page_1_section_href">';
	
    echo '<a href="'.$db_href_theme.'"><p>Перейти</p></a>';

    echo '</div class="active_tema_page_1_section_href">';
	
	echo '</div class="active_tema_page_1_section" >';
	
	echo '</li>';
}
}


}
?>