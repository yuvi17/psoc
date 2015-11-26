<?php
//	session_start();
	class admin_call extends CI_Controller
	{
		function __construct()
		{
			parent:: __construct();
		}
		function index()
		{
		
			
			$this->load->view('admin_login');
		}
	}
?>
