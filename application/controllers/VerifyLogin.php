<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//
//session_start();
class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	 $this->load->model('user','',TRUE);
$this->load->helper('url');
 }

 function index()
 {

   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim');
  $this->form_validation->set_rules('password', 'Password', 'trim|callback_check_database');

  if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login_view');
   }
   else
   {
     //Go to private area
     redirect('home/load', 'refresh');
   }

 }

 function check_database($password)
 {
// $password=MD5('$password');
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   //query the database
 
   $result = $this->user->login($username, $password);

   if($result)
   {
  //echo "Model working";
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->club_id
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>