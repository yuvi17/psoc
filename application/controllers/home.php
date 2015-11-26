<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //we need to call PHP's session object to access it through CI
class home extends CI_Controller {

 function __construct()
 {
   parent:: __construct();
	$this->load->library('session');
	   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
	 $data['id']=$session_data['id'];
  //   $this->load->view('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 function load()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
	 $data['id']=$session_data['id'];
     $this->load->view('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home/load', 'refresh');
 }
	function view()
	{
		 if($this->session->userdata('logged_in'))
		{
			 $session_data = $this->session->userdata('logged_in');
			 $data['username'] = $session_data['username'];
			 $data['id']=$session_data['id'];
			 //$this->load->view('home_view', $data);
			 $club=$data['username'];
		}
	   else
		{
		 //If no session, redirect to login page
			redirect('login', 'refresh');
		}
		$this->load->model('previous');
		$data=$this->previous->getData($club);
		//print_r($data[0]);
		if($data)
		{
		//print_r($data);
		//die();
			$row=$data->num_rows();
			$data=$data->result_array();
			
			$r=array("yuvraj"=>$data);
	
		$this->load->view('past_view',$r);
		///	print_r($r);
			//die();
		}
		else
		{
			$result=false;
			//$this->load->view('past_view',$result);
		}
	}
			function back()
		{ if($this->session->userdata('logged_in'))
		{
			 $session_data = $this->session->userdata('logged_in');
			 $data['username'] = $session_data['username'];
			 $data['id']=$session_data['id'];
			 //$this->load->view('home_view', $data);
			 $club=$data['username'];
		}
	   else
		{
		 //If no session, redirect to login page
			redirect('login', 'refresh');
		}
			$this->load->view('home_view',$data);
		}
	function register()
	{ $this->load->library('session');
			    if($this->session->userdata('logged_in'))
				{
					 $session_data = $this->session->userdata('logged_in');
					 $data['username'] = $session_data['username'];
					 $data['id']=$session_data['id'];
					// $this->load->view('home_view', $data);
						$this->load->view('register_view',$data);
				}
			  else
			   {
				 //If no session, redirect to login page
				 redirect('login', 'refresh');
			   }
	}
	function change()
	{
		if($this->session->userdata('logged_in'))
				{
					 $session_data = $this->session->userdata('logged_in');
					 $data['username'] = $session_data['username'];
					 $data['id']=$session_data['id'];
					// $this->load->view('home_view', $data);
					 $data['msg']="";
						$this->load->view('changePassword',$data);
				}
			  else
			   {
				 //If no session, redirect to login page
				 redirect('login', 'refresh');
			   }
	}

	function changePass()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['id']=$session_data['id'];
		$this->load->model('change');
		$res=$this->change->passwordChange($data);
		if($res)
		{
			$this->load->view('passwordChanged');

		}
		else
		{
			$data['msg']="Passwords don't match";
			$this->load->view('changePassword',$data);
		}


	}

}
?>
