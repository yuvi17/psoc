<?php
class register extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('register_model');
			//	session_start();
              //  $this->load->helper('url_helper');
			  $this->load->library('session');
			/*   if($this->session->userdata('logged_in'))
				{
					 $session_data = $this->session->userdata('logged_in');
					 $data["username"] = $session_data['username'];
					 $data['id']=$session_data['id'];
					// $this->load->view('home_view', $data);
				}
			  else
			   {
				 //If no session, redirect to login page
				 redirect('login', 'refresh');
			   }
			   	 $session_data = $this->session->userdata('logged_in');
					 $data=array(
					 'username'=> $this->session->userdata('username'),
					 'id'=> $this->session->userdata('id')
					);*/
        }

       public function create()
		{
		
			$this->load->helper('form');
			$this->load->library('form_validation');
			 if($this->session->userdata('logged_in'))
				{
					 $session_data = $this->session->userdata('logged_in');
					 $data["username"] = $session_data['username'];
					 $data['id']=$session_data['id'];
				}
			  else
			   {
				 //If no session, redirect to login page
				 redirect('login', 'refresh');
			   }
		//	$data['title'] = 'Create a form';

			$this->form_validation->set_rules('eventName', 'eventName', 'required');
			$this->form_validation->set_rules('venue', 'venue', 'required');
			$this->form_validation->set_rules('startDate', 'startDate', 'required');
			$this->form_validation->set_rules('startTime1', 'startTime1', 'required');
			$this->form_validation->set_rules('endTime1', 'endTime1', 'required');
			$this->form_validation->set_rules('video', 'video', 'required');
			if($data['id']>19){
			$this->form_validation->set_rules('payment', 'payment', 'required');}
			
			$this->form_validation->set_rules('contactName', 'contactName', 'required');
			$this->form_validation->set_rules('number', 'number', 'required');

			if ($this->form_validation->run() === FALSE)
			{
			 //   $this->load->view('templates/header', $data);
				$this->load->view('register_view',$data);
			 //   $this->load->view('templates/footer');

			}
			else
			{
				$this->register_model->insert();
				$this->load->view('sucess');
			}
		}
		function logout()
		{
			redirect('home/logout','refresh');
		}
		function home()
		{
			redirect('home/load','refresh');

		}
}
?>
