<?php
session_start();

include_once 'core/class.connect.php';

$obj=new connect_db();
$obj->connect();
	
class users
	{
	private $query;
	private $result;
	private $db_count_id_users;
	
		public function __construct()
			{	
				$this->query = "SELECT COUNT(id) as count_id FROM users where active='0'";
				$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
					
				$rows   = mysql_fetch_array($this->result);
	
				$this->db_count_id_users= $rows['count_id']; 
			}
		public function users_delete()
			{
				$this->query = "SELECT email,login,time_run,time_delete FROM users where active='0'";
				$this->result = mysql_query($this->query) or die ("Не верный запрос."); 
					
				for($i=0;$i<$this->db_count_id_users;$i++)
				{			
				
					$rows   = mysql_fetch_array($this->result);
						
					$db_time_run         = $rows['time_run'];
					$db_time_delete      = $rows['time_delete'];
					$db_email        	 = $rows['email'];
					$db_login        	 = $rows['login'];
					
					$time_now=time();			
					
					if($db_time_delete<=$time_now)
					{
						
						$query = "DELETE FROM users where email='".$db_email."' and login='".$db_login."'";
						$result = mysql_query($query) or die ("Не верный запрос."); 
						
					}		
				}
			}
	}
	