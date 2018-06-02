<?php
session_start();

include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();
	
class add_sub
	{
	private $query;
	private $result;
	
		public function add_subsection($number_section,$name_subsections_doc,$number_doc,$theme_doc,$target_doc,$progress_doc,$begin_doc)
			{		

					$path_section="document/section/section_".$number_section;
					$path_section.="/".$number_doc;
					$mkdir=mkdir($path_section,1777);
					
					$path_doc=$path_section;
					$path_doc.="/doc";
					$mkdir=mkdir($path_doc,1777);
					
					$path_practice=$path_doc;
					$path_practice.="/practice";
					$mkdir=mkdir($path_practice,1777);
					
					$path_laboratory=$path_doc;
					$path_laboratory.="/laboratory";
					$mkdir=mkdir($path_laboratory,0777);
					
					$path_docx_doc=$path_laboratory."/";
					$move_uploaded_file=move_uploaded_file($_FILES['docx_doc']['tmp_name'],$path_docx_doc.$_FILES['docx_doc']['name']);
					$$path_docx_doc.=$_FILES['docx_doc']['name'];
					
					$path_htm=$path_section;
					$path_htm.="/htm";
					$mkdir=mkdir($path_htm,1777);

					
					$path_load_htm_doc=$path_htm."/";
					$move_uploaded_file=move_uploaded_file($_FILES['load_htm_doc']['tmp_name'],$path_load_htm_doc.$_FILES['load_htm_doc']['name']);
					$path_load_htm_doc.=$_FILES['load_htm_doc']['name'];
					
					$this->query = "INSERT INTO subsictions(sictions,subsections, href_subsections) VALUES ('".$number_section."','".$name_subsections_doc."','".$number_section."')";
					$this->result = mysql_query($this->query) or die ("Не верный запрос1."); 
					
					$name=$number_doc;
					$href_doc_file="read_document.php";
					$href_theme="read_document.php?section=".$number_section."&page=1&laboratory=".$name;
					
					echo $name_subsections_doc;
					echo $theme_doc;
					echo $target_doc;
					echo $progress_doc;
					echo $begin_doc;
					echo $path_load_htm_doc;
					echo $href_doc_file;
					echo $number_doc;
					echo $number_section;
					
					$this->query = "INSERT INTO read_doc(practical_work,theme,progress,text,patch_to_file,href_doc_file,download_file,name,href_theme,sections) VALUES ('".$name_subsections_doc."','".$theme_doc."','".$target_doc."','".$progress_doc."','".$begin_doc."','".$path_load_htm_doc."','".$href_doc_file."','".$number_doc."','".$href_doc_file."','".$number_section."')";
					$this->result = mysql_query($this->query) or die ("Не верный запрос2."); 
					
					
					$_SESSION['mkdir_true']=true;
					echo '<script type="text/javascript">'; 
					echo 'window.location.href="developer_dashboard.php";'; 
					echo '</script>'; 
					
			}
	}