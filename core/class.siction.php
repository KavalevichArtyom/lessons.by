<?php
include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();


class siction
{

private $query;
private $result;

private $max_id_sictions_query;
private $max_id_sictions;

private $max_id_subsictions_query;
private $max_id_subsictions;

public function __construct()
    {
	// sictions
	$this->query_sictions  = "SELECT id,name,href_sections, sections FROM sections ";
    $this->result_sictions = mysql_query($this->query_sictions) or die ("Не верный запрос."); 
	
	$this->max_id_sictions_query = "SELECT COUNT(id) as max_id FROM sections ";
	$this->max_id_sictions       =  mysql_query($this->max_id_sictions_query) or die ("Не верный запрос.") ;
	
	// subsections
	$this->query_subsictions  = "SELECT id,sictions,subsections,href_subsections FROM subsictions ";
    $this->result_subsictions = mysql_query($this->query_subsictions) or die ("Не верный запрос."); 
	
/* 	$this->max_id_subsictions_query = "SELECT MAX(id) as max_id FROM subsictions ";
	$this->max_id_subsictions       =  mysql_query($this->max_id_subsictions_query) or die ("Не верный запрос.") ; */
	}
	
public function result_subsictions($sictions)	
    {
	
    $count_id_subsictions_query  = "SELECT COUNT(id) as count_id FROM subsictions WHERE sictions = ".$sictions."";
	$count_id_subsictions        =  mysql_query($count_id_subsictions_query) or die ("Не верный запрос.") ;
	
	$rows   = mysql_fetch_array($count_id_subsictions);	
	
	$db_count_id_subsictions = $rows['count_id']; 

	
	$query_subsictions  = "SELECT id,sictions,subsections,href_subsections FROM subsictions WHERE sictions like '%".$sictions."'" ;
    $result_subsictions = mysql_query($query_subsictions) or die ("Не верный запрос."); 
	
	for($i=0;$i<$db_count_id_subsictions;$i++){	

    $rows   = mysql_fetch_array($result_subsictions);
    
     $db_subsections        = $rows['subsections'];
	 $db_href_subsections    = $rows['href_subsections'];
	 
	 
/* 	 echo $db_subsections ."<br>";
	 echo $db_href_subsections ."<br>"; */
	
	echo "<li><a href=".$db_href_subsections."><p>".$db_subsections."</p></a></li>";	
    }	
	
	}
	
	
public function сonclusion_siction()
    {
	//Нахождения максимального id_sictions 
	$rows   = mysql_fetch_array($this->max_id_sictions);	
	
	$db_max_id_sictions = $rows['max_id'];
	
/* 	//Нахождения максимального id_subsictions 
	$rows   = mysql_fetch_array($this->max_id_subsictions);	
	
	$db_max_id_subsictions = $rows['max_id']; */

	
	
for($i=1,$sections=1;$i<=$db_max_id_sictions;$i++,$sections++){	

    $rows   = mysql_fetch_array($this->result_sictions);
    
    $db_name           = $rows['name'];
    $db_href_siction   = $rows['href_sections'];
	$db_sections       = $rows['sections'];
	
/* 	echo $db_name."<br>";
	echo $db_href_siction ."<br>";
	$this->result_subsictions($sections); */
	
	
	echo '<li><span><div class="span_table"><div class="text_table"><p>'.$db_name.'</p></div><div class="href_table"><a href='.$db_href_siction.''.$db_sections.'></a></div></div></span>';
    echo "<ul>";
    $this->result_subsictions($i);
    echo "</ul>";
    echo "</li>";
	
	
    }	

	
    }
}
?>