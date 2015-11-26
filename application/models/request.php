<?php
Class request extends CI_Model
{
	function getData()
	{
	//$temp=0;
		$this->load->database();
		/*$this->db->select('eventId','club','eventName','startDate');
		$this->db->from('coverage');
		$this->db->where('covered',0);
		$this->db->limit(10);*/
		
		$data= $this -> db -> get('coverage1');
		
		if($data -> num_rows() >0)
			{
				return $data;
				
			}
		else
			return false;
	}
}
?>
