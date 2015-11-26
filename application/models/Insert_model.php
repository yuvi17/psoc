<?php
class insert_model extends CI_Model
{
	function login($username,$password,$id)
	{
		$data=array('club_id' => $username,
					'password'=>MD5('$password'),
					'id'=>$id
					);
		$this->db->insert('users',$data);
		echo "Successful updatation";
	}
}
?>
		
		
