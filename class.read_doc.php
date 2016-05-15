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

public function read_doc($name,$section,$practice)
{

$this->query  = 'SELECT practical_work, name, theme, target, progress, text, path_to_file, href_doc_file, download_file FROM read_doc where (name='.$name.' and sections='.$section.') or practice='.$practice.'';
$this->result = mysql_query($this->query) or die ("Не верный запрос.");

    $this->rows   = mysql_fetch_array($this->result);
    
    $db_path_to_file  = $this->rows['path_to_file'];
	
    $filename=$db_path_to_file;
    $homepage=file_get_contents($filename);
	
    echo $homepage;
	
}

public function download_doc($name,$section,$practice)
{

$this->query  = 'SELECT practical_work, name, theme, target, progress, text, path_to_file, href_doc_file, download_file FROM read_doc where (name='.$name.' and sections='.$section.') or practice='.$practice.'';
$this->result = mysql_query($this->query) or die ("Не верный запрос.");

    $this->rows   = mysql_fetch_array($this->result);
   
    $db_download_file = $this->rows['download_file'];
	
    echo '<a href="'.$db_download_file.'"><p>Скачать документ</p></a>';
}


}

?>