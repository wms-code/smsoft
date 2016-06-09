<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		
		if(!isset($_SESSION['username'])){
        	$url = base_url('login');
        	header("Location: $url");
        }

       if($this->uri->segment(1)!=$_SESSION['usertype'])
       {
       	$this->session->unset_userdata('username');
       	$this->session->unset_userdata('usertype');
		$this->session->sess_destroy();
		$url=base_url('login');
		header("Location: $url");
       }
       
	}

	public function index()
	{
		
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */