<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


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

		$this->load->view('admin/home');

	}

	public function student()
	{
		
		if ($this->input->post('StuInfo'))
		{
			$StuInfo = $this->input->post('StuInfo');	
			$query = $this->db->insert('StuInfo',$StuInfo);
			if($this->db->affected_rows()>0)
			{
			
				$StuMaster = $this->input->post('StuMaster');
				$StuMaster['stu_id'] =  $this->db->insert_id();
				$query = $this->db->insert('stumaster', $StuMaster);
				if($this->db->affected_rows()<=0)
				{
					echo "errr";
				}
			}
		}
		elseif ($this->uri->segment(3)=='create') 	
		{
			$this->load->view('admin/studentadd');
		}
				
	}


	public function login()
	{
		


		$this->load->view('login');
	}



	function gen_password($l=4)
	{
    	return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $l);
	}


	
}
