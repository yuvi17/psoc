<?php
//	session_start();
	class login extends CI_Controller
	{
		function __construct()
		{
			parent:: __construct();
		}
		function index()
		{
		
			
			$this->load->view('login_view');
		}
	}
?>
			
