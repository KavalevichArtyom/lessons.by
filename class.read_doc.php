<?php
include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();

class doc
{

private $download_file;
private $query;
private $result;
private $rows;

public function read_doc($name,$section,$practice,$laboratory)
{

if (isset($practice))
{
$this->query  = 'SELECT practical_work, name, theme, target, progress, text, path_to_file, href_doc_file, download_file FROM read_doc where (name='.$name.' and sections='.$section.') and practice='.$practice.'';
}
else
{
$this->query  = 'SELECT practical_work, name, theme, target, progress, text, path_to_file, href_doc_file, download_file FROM read_doc where (name='.$name.' and sections='.$section.') and laboratory='.$laboratory.'';
}
$this->result = mysql_query($this->query) or die ("Не верный запрос.");

    $this->rows   = mysql_fetch_array($this->result);
    
    $db_path_to_file  = $this->rows['path_to_file'];
	
    $filename=$db_path_to_file;
    $homepage=file_get_contents($filename);
	
    echo $homepage;
	
}

public function download_doc($name,$section,$practice,$laboratory)
{

if (isset($practice))
{
$this->query  = 'SELECT practical_work, name, theme, target, progress, text, path_to_file, href_doc_file, download_file FROM read_doc where (name='.$name.' and sections='.$section.') and practice='.$practice.'';
}
else
{
$this->query  = 'SELECT practical_work, name, theme, target, progress, text, path_to_file, href_doc_file, download_file FROM read_doc where (name='.$name.' and sections='.$section.') and laboratory='.$laboratory.'';
}

$this->result = mysql_query($this->query) or die ("Не верный запрос.");

    $this->rows   = mysql_fetch_array($this->result);
   
    $db_download_file = $this->rows['download_file'];
	
	if(($db_download_file!="")&&($_SESSION['autorize_true']==true))
		{
			echo '<div class="download_file">';
			echo '<div class="active_download_file">';
			echo '<a href="'.$db_download_file.'"><p>Скачать документ</p></a>';
			echo '</div class="active_download_file">';
			echo '</div class="download_file">';
			$_SESSION['db_download_file_false']=false;
		}
		else
		{
			$_SESSION['db_download_file_false']=true;
		}
}

public function href_presentation($name,$section,$practice,$laboratory)
{

	if (isset($practice))
	{
	$this->query  = 'SELECT href_presentation FROM read_doc where (name='.$name.' and sections='.$section.') and practice='.$practice.'';
	}
	else
	{
	$this->query  = 'SELECT href_presentation FROM read_doc where (name='.$name.' and sections='.$section.') and laboratory='.$laboratory.'';
	}

	$this->result = mysql_query($this->query) or die ("Не верный запрос.");

		$this->rows   = mysql_fetch_array($this->result);
	   
		$db_href_presentation = $this->rows['href_presentation'];
		
		if(($db_href_presentation!="")&&($_SESSION['autorize_true']==true))
		{
			echo '<div class="href_presentation">';
			echo '<div class="active_presentation">';
			echo '<a href="'.$db_href_presentation.'"><p>Просмотр презентации</p></a>';
			echo '</div class="active_presentation">';
			echo '</div class="href_presentation">';
			$_SESSION['db_href_presentation_false']=false;
		}
		else
		{
			$_SESSION['db_href_presentation_false']=true;
		}
}

public function href_know_control($name,$section,$practice,$laboratory)
{

	if (isset($practice))
	{
	$this->query  = 'SELECT href_know_control FROM read_doc where (name='.$name.' and sections='.$section.') and practice='.$practice.'';
	}
	else
	{
	$this->query  = 'SELECT href_know_control FROM read_doc where (name='.$name.' and sections='.$section.') and laboratory='.$laboratory.'';
	}

	$this->result = mysql_query($this->query) or die ("Не верный запрос.");

		$this->rows   = mysql_fetch_array($this->result);
	   
		$db_href_know_control = $this->rows['href_know_control'];
		
		if(($db_href_know_control!="")&&($_SESSION['autorize_true']==true))
		{
			echo '<div class="href_knowledge">';
			echo '<div class="active_knowledge">';
			echo '<a href="'.$db_href_know_control.'"><p>Перейти к Контролю знаний</p></a>';
			echo '</div class="active_knowledge">';
			echo '</div class="href_knowledge">';
			$_SESSION['db_href_know_control_false']=false;
		}	
		else
		{
			$_SESSION['db_href_know_control_false']=true;
		}
	}

	public function autorize_false()
	{
		if(($_SESSION['db_download_file_false']==true)&&($_SESSION['db_href_presentation_false']==true)&&($_SESSION['db_href_know_control_false']==true))
		{
			echo '<div class="autorize_false"><p>У вас недостаточно прав.Необходима регистрация.</p></div>';
		}

	}

}
?>