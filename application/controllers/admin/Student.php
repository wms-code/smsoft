<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {


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

	public function create()
	{
		
		if ($this->input->post('submit'))
		{
			$data['roll_no']=$this->input->post('roll_no');
			$data['title']=$this->input->post('title');
			$data['first_name']=$this->input->post('first_name');
			$data['middle_name']=$this->input->post('middle_name');
			$data['last_name']=$this->input->post('last_name');
			$data['gender']=$this->input->post('gender');
			$data['email_id']=$this->input->post('email_id');
			$data['mobile']=$this->input->post('mobile');
			$data['dob']=$this->input->post('dob');
			$data['adm_category']=$this->input->post('adm_category');
			$data['course']=$this->input->post('course');
			$data['section']=$this->input->post('section');
			$data['adm_date']=$this->input->post('adm_date');
			$data['entry_by']="hi";

			$this->db->insert('stuinfo', $data);

			$url=base_url('admin/student/list');
			header("location:$url");
		}
		else {
			$this->load->view('admin/studentadd');
		}
		
		
				
	}
	

			//$data['query']=$this->db->get('stuinfo');
			//$this->load->view('admin/studentlist',$data);




	
}
