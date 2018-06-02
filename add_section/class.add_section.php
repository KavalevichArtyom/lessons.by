<?php
session_start();

include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();
	
class add
	{
	private $query;
	private $result;
	
		public function add_section($number_section,$name)
			{				
				$this->query = "SELECT sections FROM sections where sections='".$number_section."'";
				$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
					
				$rows   = mysql_fetch_array($this->result);
					
				$db_sections          = $rows['sections'];
				
				
				
				if((empty($db_sections)==true))
				{
					$path_section="document/section/section_".$number_section;
					$mkdir=mkdir($path_section,0700);
					
					$href_sections="active_tema_page_1.php?section=";
					
					$this->query = "INSERT INTO sections(name,href_sections,sections) VALUES ('".$name."','".$href_sections."','".$number_section."')";
					$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
					
					$_SESSION['mkdir_true']=true;
					echo '<script type="text/javascript">'; 
					echo 'window.location.href="developer_dashboard.php";'; 
					echo '</script>';
				}
				else
				{
					$_SESSION['mkdir_false']=true;
					echo '<script type="text/javascript">'; 
					echo 'window.location.href="developer_dashboard.php";'; 
					echo '</script>';
				}
					
			}
	}