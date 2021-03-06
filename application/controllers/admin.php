<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class admin extends CI_Controller
	{
		function __construct()
		{
			parent:: __construct();
		}
		
		function index()
		{
			   $this->load->library('form_validation');

				$this->form_validation->set_rules('username', 'Username', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_login');
				  if($this->form_validation->run() == FALSE)
					{
						echo "Unable to verify redientials";
						 //Field validation failed.  User redirected to login page
						 $this->load->view('admin_login');
					}
					else
					{
					 //Go to private area
					// $username=$this->session->userdata('username');
					 $this->load->view('admin_view');
					}
		}
		function back()
		{
			$this->load->view('admin_view');
		}
		
		function check_login($password)
		{
			 $username = $this->input->post('username');
			 if($username=='admin' && $password=='psoc123#')
			{
						 $sess_array = array(
						'username' => $username
					);
					$this->session->set_userdata('logged_in', $sess_array);
					return True;
			}
			else
			{
				$this->form_validation->set_message('check_login', 'Invalid username or password');
				return false;
			}
		}
		
		 function logout()
		{
			$this->session->unset_userdata('logged_in');
			session_destroy();
			redirect('admin_call','refresh');
		}
		
		function request()
		{
			$this->load->model('data');
			$data = $this -> data ->getData();
			$r=array("result"=>$data);
			if($data)
				{
					//die*/
					$this->load->view('request_view',$r);
					//	
				}
				else
				{
						
						$this->load->view('request_view',$r);
				}
		}
		
		function getRequest($data)
		{
				
			$this->load->model('data');
			$q=$this->data->getOne($data);
			$q=$q[0];
			$this->load->view('singleRequest',$q);
		}
		
		function fillDetails($id)
		{
					$this->load->helper('form');
			$this->load->library('form_validation');
				//	$this->form_validation->set_rules('coverageIncharge', 'coverageIncharge', 'required');
			//$this->form_validation->set_rules('phNumber', 'phNumber', 'required');
			

				$this->load->model('data');
				$this->data->fill($id);
				redirect('admin/request','refresh');
			
		}
		function update()
		{	
		$this->load->model('data');
		$query=$this->data->getAll();
					$r=array("result"=>$query);
			$this->load->view('request_view',$r);
		}

		function insert()
		{
			$this->load->view('createNew');
		}

		function createUser()
		{
			$this->load->model('data');
			$data=$this->data->insertUser();
			if($data)
			{
				$data=array(
					"msg"=>"User successfully added"
					);
			}
			else$data=array(
					"msg"=>"Club already has a username or Id is not unique"
					);

			$this->load->view('done_view',$data); // add a view name here 
		}
 }
 ?>
