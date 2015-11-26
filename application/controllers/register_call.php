<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start();
class register_call extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
				//session_start();
              //  $this->load->model('register_model');
              //  $this->load->helper('url_helper');
			  $this->load->library('session');
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
		public function index()
		{
		
		}
}
?>
