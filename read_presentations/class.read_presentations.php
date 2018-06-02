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
	
	$this->count_id_query = "SELECT COUNT(id) as count_id FROM presentation";
	$this->count_id       =  mysql_query($this->count_id_query) or die ("Не верный запрос.") ;
	
	$rows   = mysql_fetch_array($this->count_id);	
	
	$this->db_count_id_subsictions = $rows['count_id']; 
	}

public function read_presentations()
{

    $query  = "SELECT id,name,href_image,href_downloand,href_document,href_knowlenge,href_presentation,number,href_ondrive_presentation	 FROM presentation";
    $result = mysql_query($query) or die ("Не верный запрос."); 
	
	for($i=0;$i<$this->db_count_id_subsictions;$i++){	

    $rows   = mysql_fetch_array($result);
    
     $db_href_image        = $rows['href_image'];
	 $db_href_downloand    = $rows['href_downloand'];
	 $db_href_document       = $rows['href_document'];
	 $db_href_knowlenge    = $rows['href_knowlenge '];
	 $db_href_presentation       = $rows['href_presentation'];
	 $db_href_ondrive_presentation    = $rows['href_ondrive_presentation'];
	 $db_number    = $rows['number'];
	 

	 
		echo '<li>';
		echo '<div class="goal_presentation_sections">';
		echo '<div class="goal_presentation_center_img">';
		echo '<img src='.$db_href_image.'></img>';
		echo '</div class="goal_presentation_center_img">';
		echo '<div class="goal_presentation_center_panel">';
		
			if(($db_href_downloand!="")&&($_SESSION['autorize_true']==true))
		{
			echo '<div class="goal_download_file">';
			echo '<div class="goal_active_download_file">';
			echo '<a href='.$db_href_downloand.'><p>Скачать<p></a>';
			echo '</div class="goal_active_download_file">';
			echo '</div class="goal_download_file">';
		}
		
		echo '<div class="goal_href_presentation">';
		echo '<div class="goal_active_presentation">';
		echo '<a href='.$db_href_presentation.''.$db_number.'><p>Просмотр</p></a>';
		echo '</div class="goal_active_presentation">';
		echo '</div class="goal_href_presentation">';
		
			if(($db_href_knowlenge!="")&&($_SESSION['autorize_true']==true))
		{
		
			echo '<div class="goal_href_knowledge">';
			echo '<div class="goal_active_knowledge">';
			echo '<a href='.$db_href_knowlenge.'><p>Контроль знаний</p></a>';
			echo '</div class="goal_active_knowledge">';
			echo '</div class="goal_href_knowledge">';
		}

		echo '</div class="goal_presentation_center_panel">';
		echo '</div class="goal_presentation_sections">';
		echo '</li>';
    }	
}

public function read_presentation($number)
{

    $query  = 'SELECT id,name,href_image,href_downloand,href_document,href_knowlenge,href_presentation,number,href_ondrive_presentation	 FROM presentation where number='.$number.'';
    $result = mysql_query($query) or die ("Не верный запрос."); 

    $rows   = mysql_fetch_array($result);
    
     $db_href_image        = $rows['href_image'];
	 $db_href_downloand    = $rows['href_downloand'];
	 $db_href_document       = $rows['href_document'];
	 $db_href_knowlenge    = $rows['href_knowlenge '];
	 $db_href_presentation       = $rows['href_presentation'];
	 $db_href_ondrive_presentation    = $rows['href_ondrive_presentation'];
	 $db_number    = $rows['number'];
	 
		echo '<div class="goal_read_presentation">';
		echo '<div class="presentation">';
		echo '<iframe src="'.$db_href_ondrive_presentation.'" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>';
		echo '</div class="presentation">';
		echo '</div class="goal_read_presentation">';
		echo '<div class="goal_read_presentation_panel">';
		
		if(($db_href_downloand!="")&&($_SESSION['autorize_true']==true))
		{
			echo '<div class="goal_read_download_file">';
			echo '<div class="goal_read_active_download_file">';
			echo '<a href="'.$db_href_downloand.'"><p>Скачать документ<p></a>';
			echo '</div class="goal_read_active_download_file">';
			echo '</div class="goal_read_download_file">';
			$_SESSION['db_href_downloand']=false;
		}
		else
		{
			$_SESSION['db_href_downloand']=true;
		}
		
		if(($db_href_document!="")&&($_SESSION['autorize_true']==true))
		{
			echo '<div class="goal_read_href_presentation">';
			echo '<div class="goal_read_active_presentation">';
			echo '<a href="'.$db_href_document.'"><p>Документ по теме</p></a>';
			echo '</div class="goal_read_active_presentation">';
			echo '</div class="goal_read_href_presentation">';
			$_SESSION['db_href_document']=false;
		}
		else
		{
			$_SESSION['db_href_document']=true;
		}
		
		if(($db_href_knowlenge!="")&&($_SESSION['autorize_true']==true))
		{
			echo '<div class="goal_read_href_knowledge">';
			echo '<div class="goal_read_active_knowledge">';
			echo '<a href="'.$db_href_knowlenge.'"><p>Перейти к контролю знаний</p></a>';
			echo '</div class="goal_read_active_knowledge">';
			echo '</div class="goal_read_href_knowledge">';	   
			$_SESSION['db_href_knowlenge']=false;
		}
		else
		{
			$_SESSION['db_href_knowlenge']=true;
		}
		
				if(($_SESSION['db_href_downloand']==true)&&($_SESSION['db_href_document']==true)&&($_SESSION['db_href_knowlenge']==true))
		{
			echo '<div class="autorize_false_presentations"><p>У вас недостаточно прав.Необходима регистрация.</p></div>';
		}
		echo '</div class="goal_read_presentation_panel">'; 
}

}
?>