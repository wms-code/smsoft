<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		if(!isset($_SESSION['username'])){
        	$url = base_url('login');
        	header("Location: $url");
        }
       elseif ($_SESSION['usertype']!="admin") {
        	$url = base_url();
        	header("Location: $url");
        }
	}

	 
	public function index()
	{

		$this->load->view('admin/home');

	}



	
}
