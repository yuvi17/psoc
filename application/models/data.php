<?php
	Class data extends CI_Model
	{
	 function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
		function getData()
		{
			$this-> load-> database();
			$this ->db -> select('eventId,club_id,startDate');
		/*	$this ->db ->from ('coverage');*/
			$this ->db ->where('covered',0);
			
			
			$data = $this ->db->get('coverage1');
			//$$data->result());
			///die(); 
			if($data -> num_rows() >0)
			{
				return $data->result_array();
			}
			else
				return false;
		}
		function getOne($id)
		{
			$this->load->database();
			$this->db->where('eventId',$id);
			$q=$this->db->get('coverage1');
				return $q->result_array();
		}
		
		function fill($id)
		{
//$q;
			$this->load->database();
			$this->db->select('covered');
			$this->db->where('eventId',$id);
			$query=$this->db->get('coverage1');
			$query=$query->result_array();
			if($query)
			{
				$query=$query[0];
			if($query['covered']==0){
			$data=array(
			'coverageIncharge'=>$this->input->post('coverageIncharge'),
			'phNumber'=>$this->input->post('phNumber'),
			'covered'=>1
			);
				$this->db->where('eventId',$id);
			return $this->db->update('coverage1', $data);
			}
			else if($query['covered']>=1){
				$q=$this->input->post('status');
				if(strcmp($q,"Being Sorted")==0){
				echo "1";
					$r=1;
					$data=array(
				'status'=>$q,
				'covered'=>$r,
				);}
					else if(strcmp($q,"Being Edited")==0)
					{ echo "2";
				$r=2;
					$data=array(
				'status'=>$q,
				'covered'=>$r
				); }
					else if(strcmp($q,"Uploaded")==0){
					echo "3";
					$r=3;
				$data=array(
				'status'=>$q,
				'covered'=>$r,
				'hub'=>$this->input->post('hub'),
				'nick'=>$this->input->post('nick'),
				'folder'=>$this->input->post('folder')
				);
				}
				//print_r($data);
			//	die();
				$this->db->where('eventId',$id);
			return $this->db->update('coverage1', $data);
			}
		  }
		}
		/*	else if($q['covered']==2){
				$q=$this->input->post('status');
				if($q=="Being Edited")
					$r=2;
					else
					$r=3;
				$data=array(
				'status'=>$q;
				'covered'=>$r;
				);
				return $this->db->insert('coverage', $data);
			}
				else if($q['covered']==3){
				$q=$this->input->post('status');
				if($q=="Uploaded")
					$r=3;
				$data=array(
				'status'=>$q;
				'covered'=>$r;
				'folder'
				);
			}*/
		function getAll()
		{
			$this->load->database();
			$this->db->order_by('eventId', 'DESC');    
     $query = $this->db->get('coverage1',10);
    return $query->result_array();
		}

		function insertUser()
	{
		$username=$this->input->post('clubId');
		$password=$this->input->post('password');
		$id=$this->input->post('Id');

		$this->db->where('club_id',$username);
		$userCheck=$this->db->get('users');
		$this->db->where('Id',$id);
		$idCheck=$this->db->get('users');
		//print_r($userCheck);
	//	die();
		if($userCheck->num_rows()==0 && $idCheck->num_rows()==0){
			$data=array('club_id' =>$username,
					'password'=>$password,
					'id'=>$id					);
		$this->db->insert('users',$data);

		return true;
		}
		else
			{
				return false;	 
			}
		//echo "Successful updatation";
	}
				
	}
?>
