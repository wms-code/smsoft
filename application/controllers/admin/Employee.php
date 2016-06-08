<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {


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

		$data['query']=$this->db->get('empinfo');
		$this->load->view('admin/employeelist',$data);

	}

	public function create()
	{
		
		if ($this->input->post('submit'))
		{
			$data['emp_id']=$this->input->post('emp_id');
			$data['title']=$this->input->post('title');
			$data['first_name']=$this->input->post('first_name');
			//$data['middle_name']=$this->input->post('middle_name');
			$data['last_name']=$this->input->post('last_name');
			$data['gender']=$this->input->post('gender');
			$data['email_id']=$this->input->post('email_id');
			$data['mobile']=$this->input->post('mobile');
			$data['dob']=$this->input->post('dob');
			$data['marital_status']=$this->input->post('marital_status');
			$data['address']=$this->input->post('address');
			$data['city']=$this->input->post('city');
			$data['nationality_name']=$this->input->post('nationality_name');
			$data['country']=$this->input->post('country');
			$data['app_category']=$this->input->post('app_category');
			$data['degree']=$this->input->post('degree');			
			$data['course']=$this->input->post('course');
			$data['app_date']=$this->input->post('app_date');
			$data['designation']=$this->input->post('designation');			
			$data['experience']=$this->input->post('experience');
			$data['salary']=$this->input->post('salary');
			$data['entry_by']="hi";

			
			$this->db->insert('empinfo', $data);

			$url=base_url('admin/employee/');
			header("location:$url");
		}
		else {
			$data['query']=$this->db->get('empinfo');
			$data['nation']=$this->db->get('nationalities');
			$data['countr']=$this->db->get('countries');
			$data['degr']=$this->db->get('degrees');
			$data['cours']=$this->db->get('courses');
			$data['appoint']=$this->db->get('appointment');
			$data['design']=$this->db->get('designation');
			$this->load->view('admin/employeeadd',$data);
		}		
				
	}
	
	

	public function employeeremove()
	{
		$emp_id=$this->uri->segment(4);
		$this->db->where('emp_id',$emp_id);
		$this->db->delete('empinfo');
		$url = base_url('admin/employee/');
        header("Location: $url");
	}

	public function employeeedit()
	{
		
		if ($this->input->post('submit'))
		{
			
			$data['title']=$this->input->post('title');
			$data['first_name']=$this->input->post('first_name');
			//$data['middle_name']=$this->input->post('middle_name');
			$data['last_name']=$this->input->post('last_name');
			$data['gender']=$this->input->post('gender');
			$data['email_id']=$this->input->post('email_id');
			$data['mobile']=$this->input->post('mobile');
			$data['dob']=$this->input->post('dob');
			$data['marital_status']=$this->input->post('marital_status');
			$data['address']=$this->input->post('address');
			$data['city']=$this->input->post('city');
			$data['nationality_name']=$this->input->post('nationality_name');
			$data['country']=$this->input->post('country');
			$data['app_category']=$this->input->post('app_category');
			$data['degree']=$this->input->post('degree');			
			$data['course']=$this->input->post('course');
			$data['app_date']=$this->input->post('app_date');
			$data['designation']=$this->input->post('designation');			
			$data['experience']=$this->input->post('experience');
			$data['salary']=$this->input->post('salary');
			$data['update_by']="hi";

			$emp_id=$this->uri->segment(4);
			$this->db->where('emp_id',$emp_id);
			$this->db->update('empinfo', $data);

			$url=base_url('admin/employee/');
			header("location:$url");
		}
		else {
			
			$data['query']=$this->db->get('empinfo');
			$data['nation']=$this->db->get('nationalities');
			$data['countr']=$this->db->get('countries');
			$data['degr']=$this->db->get('degrees');
			$data['cours']=$this->db->get('courses');
			$data['appoint']=$this->db->get('appointment');
			$data['design']=$this->db->get('designation');
			$emp_id=$this->uri->segment(4);
			$this->db->where('emp_id',$emp_id);
			$data['query1']=$this->db->get('empinfo');
			$this->load->view('admin/employeeedit',$data);
		}	
	}


	public function master()
	{
		if($this->uri->segment(4))
		{
			$this->db->where('id',$this->uri->segment(4));
			$query=$this->db->get('empinfo');
			$data=$query->result()[0];
		$this->load->view('admin/empmaster',$data);
		}
	}



	
}
