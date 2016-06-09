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
       elseif ($_SESSION['usertype']!='admin') {
        	$url = base_url();
        	header("Location: $url");
        }

	}

	public function index()
	{
		
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */