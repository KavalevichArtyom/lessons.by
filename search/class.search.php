<?php
include_once 'core/class.connect.php';
include_once 'class.read_db_theme.php';

$obj=new connect_db();
$obj->connect();

class search
	{			
		private $query;
		private $result;
		private $rows;
		private $db_count_id;
		
		public function __construct()
			{
				$this->query = "SELECT COUNT(id) as count_id FROM search";
				$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
					
				$rows   = mysql_fetch_array($this->result);
	
				$this->db_count_id= $rows['count_id']; 
				
			}
		
		public function check_search($search)
			{

				$this->query  = 'SELECT sections,subsections,word,href_subsections FROM search';	
				$this->result = mysql_query($this->query) or die ("Не верный запрос.");
				
				for($i=0;$i<$this->db_count_id;$i++)
				
					{	
						$this->rows   = mysql_fetch_array($this->result);
					   
						$db_sections			= $this->rows['sections'];
						$db_subsections 		= $this->rows['subsections'];
						$db_word				= $this->rows['word'];
						$db_href_subsections 	= $this->rows['href_subsections'];
						
						$array_word=explode(" ",$db_word);
						
						for($j=0;$j<count($array_word);$j++)
							{	
								if($search==$array_word[$j])
									{	
										$obj=new theme();
										$obj->read_theme_search($db_sections,$db_subsections);
									}
							}
							
					}
					
			}

	}

?>