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
						
						
						
						
						$array_word=explode(", ",$db_word);
						$array_search=explode(", ",$search);
						
						$array_result=array("");
						$array_result_true=array("");
						
						$a=0;
						$j=0;						
						
						for($g=0;$g<count($array_search);$g++)
						{
							for($j=0;$j<count($array_word);$j++)
								{	
									if((isset($array_search[$g])) && (!empty($array_search[$g])) && (isset($array_word[$j])) && (!empty($array_word[$j])))
									{
										if($array_search[$g]==$array_word[$j])
											{	
																							
												$array_result[$a]=$db_sections;
												$array_result[$a].=" ".$db_subsections;
												$a++;
												
											}
									}
								}
						}				

						if($array_result[0]=="")
						{
							$break=true;
							$break_all++;
						}
						else
						{
							$break=false;
						}
						
						if($break_all==$this->db_count_id)	
						{	
							echo "<div class='error_search'>";
							echo "<img src='Image/error_search.jpg' />";
							echo "<p>По вашему запросу ничего не найдено.</p>";
							echo "</div class='error_search'>";
						}
						
						if($break==false)
						{	
								for($g=0;$g<	count($array_result);++$g)
								{
									for($j=0;$j<count($array_result_true);++$j)
									{	
										if(($array_result_true[$j]!=$array_result[$g]) && (empty($array_result[$g])==false))
										{
											$array_result_true[$j]=$array_result[$g];
										}
									}	
								}
								
								
								for($g=0;$g<count($array_result_true);++$g)
								{	
									$result=explode(" ",$array_result_true[$g]);
									
									$sections=$result[0];
									$subsections=$result[1];
									$subsections.=" ".$result[2];
									$subsections.=" ".$result[3];
									$subsections.=" ".$result[4];

									$obj=new theme();
									$obj->read_theme_search($sections,$subsections);
								}	
						}
						
						
					}	
			}

	}

?>