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

		$this->load->view('admin/home');

	}

	public function create()
	{
		
		if ($this->input->post('submit'))
		{
			$data['emp_id']=$this->input->post('emp_id');
			$data['title']=$this->input->post('title');
			$data['first_name']=$this->input->post('first_name');
			$data['middle_name']=$this->input->post('middle_name');
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

			
			$this->db->insert('emp_info', $data);

			$this->db->insert('fee_details', $data1);

			$url=base_url('admin/employee/plist');
			header("location:$url");
		}
		else {
			$data['query1']=$this->db->get('stuinfo');
			$data['nation']=$this->db->get('nationalities');
			$data['countr']=$this->db->get('countries');
			$data['degr']=$this->db->get('degrees');
			$data['cours']=$this->db->get('courses');
			$data['appoint']=$this->db->get('appointment');
			$data['design']=$this->db->get('designation');
			$this->load->view('admin/employeeadd',$data);
		}		
				
	}
	
	public function plist()
	{
	
		$data['query']=$this->db->get('emp_info');
		$this->load->view('admin/employeelist',$data);
	}

	public function employeeremove()
	{
		$emp_id=$this->uri->segment(4);
		$this->db->where('emp_id',$emp_id);
		$this->db->delete('emp_info');
		$url = base_url('admin/employee/plist');
        header("Location: $url");
	}

	public function employeeedit()
	{
		

		if ($this->input->post('submit'))
		{
			$emp_id=$this->uri->segment(4);
			$data['title']=$this->input->post('title');
			$data['first_name']=$this->input->post('first_name');
			$data['middle_name']=$this->input->post('middle_name');
			$data['last_name']=$this->input->post('last_name');
			$data['gender']=$this->input->post('gender');
			$data['email_id']=$this->input->post('email_id');
			$data['mobile']=$this->input->post('mobile');
			$data['dob']=$this->input->post('dob');
			$data['app_category']=$this->input->post('app_category');
			$data['course']=$this->input->post('course');
			$data['section']=$this->input->post('section');
			$data['adm_date']=$this->input->post('adm_date');			
			$data['entry_level']=$this->input->post('entry_level');
			$data['degree']=$this->input->post('degree');
			$data['entry_by']="hi";

			$data1['entry_by']="hi";
			$data1['emp_id']=$this->input->post('emp_id');
			$data1['college_fee']=$this->input->post('college_fee');
			$data1['hostel_fee']=$this->input->post('hostel_fee');
			$data1['transport_fee']=$this->input->post('transport_fee');
			$data1['tution_fee']=$this->input->post('tution_fee');
			$data1['fee']=$this->input->post('fee');
			$data1['other_fee']=$this->input->post('other_fee');
			$data1['total_fees']=$data1['college_fee']+$data1['hostel_fee']+$data1['transport_fee']+$data1['tution_fee']+$data1['other_fee'];



			$this->db->where('emp_id',$emp_id);
			$this->db->update('emp_info', $data);

			$this->db->where('emp_id',$emp_id);
			$this->db->update('fee_details', $data1);

			$url = base_url('admin/employee/plist');
	        header("Location: $url");
	    }

	    else {
	    	$emp_id=$this->uri->segment(4);
	    	$data['query']=$this->db->get('emp_info');
	    	$data['adm']=$this->db->get('admission');
	    	$this->db->where('emp_id',$emp_id);
			$data['query1']=$this->db->get('emp_info');
			$this->db->where('emp_id',$emp_id);
			$data['fees']=$this->db->get('fee_details');
			$data['degr']=$this->db->get('degrees');
			$data['cours']=$this->db->get('courses');
			$data['entrys']=$this->db->get('entry_level');
			
			$this->load->view('admin/employeeedit',$data);
		}

	}




	
}
