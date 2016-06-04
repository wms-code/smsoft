<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appconfig extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		/*if(!isset($_SESSION['username'])){
        	$url = base_url('login');
        	header("Location: $url");
        }
       elseif ($_SESSION['usertype']!="1") {
        	$url = base_url();
        	header("Location: $url");
        }*/
	}


	public function index()
	{

		
	}

	public function country()
	{
		
		$this->load->view('country');
	}

}

/* End of file Config.php */
/* Location: ./application/controllers/Config.php */