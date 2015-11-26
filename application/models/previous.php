<?php
	Class previous extends CI_Model
	{
		function __construct()
		{
			parent:: __construct();
		}
		
		function getData($username)
		{
			$this->load->database();
			$this->db->where('club_id',$username);
			$q=$this->db->get('coverage1');
				
			return $q;
		}
	}
?>
