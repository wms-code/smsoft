<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends MY_Controller {


	public function __construct()
	{
		parent::__construct();

	}

	 
	public function index()
	{

		$data['query']=$this->db->get('stuinfo');
		$this->load->view('admin/studentlist',$data);;

	}

	public function create()
	{
		
		if ($this->input->post('submit'))
		{
			$data['roll_no']=$this->input->post('roll_no');
			$data['title']=$this->input->post('title');
			$data['first_name']=$this->input->post('first_name');
			//$data['middle_name']=$this->input->post('middle_name');
			$data['last_name']=$this->input->post('last_name');
			$data['gender']=$this->input->post('gender');
			$data['email_id']=$this->input->post('email_id');
			$data['mobile']=$this->input->post('mobile');
			$data['dob']=$this->input->post('dob');
			$data['adm_category']=$this->input->post('adm_category');
			$data['course']=$this->input->post('course');
			$data['section']=$this->input->post('section');
			$data['adm_date']=$this->input->post('adm_date');
			$data['entry_level']=$this->input->post('entry_level');
			$data['degree']=$this->input->post('degree');
			$data['entry_by']="hi";


			$data1['entry_by']="hi";
			$data1['roll_no']=$this->input->post('roll_no');
			$data1['college_fee']=$this->input->post('college_fee');
			$data1['hostel_fee']=$this->input->post('hostel_fee');
			$data1['transport_fee']=$this->input->post('transport_fee');
			$data1['tution_fee']=$this->input->post('tution_fee');
			$data1['fee']=$this->input->post('fee');
			$data1['other_fee']=$this->input->post('other_fee');
			$data1['total_fees']=$data1['college_fee']+$data1['hostel_fee']+$data1['transport_fee']+$data1['tution_fee']+$data1['other_fee'];

			
			$this->db->insert('stuinfo', $data);

			$this->db->insert('fee_details', $data1);

			$url=base_url('admin/student/plist');
			header("location:$url");
		}
		else {
	    	$data['query']=$this->db->get('stuinfo');
	    	$data['adm']=$this->db->get('admission');
			$data['query1']=$this->db->get('stuinfo');
			$data['fees']=$this->db->get('fee_details');
			$data['degr']=$this->db->get('degrees');
			$data['cours']=$this->db->get('courses');
			$data['entrys']=$this->db->get('entry_level');
			$this->load->view('admin/studentadd',$data);
		}		
				
	}
	


	public function studentremove()
	{
		$roll_no=$this->uri->segment(4);
		$this->db->where('roll_no',$roll_no);
		$this->db->delete('stuinfo');
		$url = base_url('admin/student/plist');
        header("Location: $url");
	}

	public function studentedit()
	{
		

		if ($this->input->post('submit'))
		{
			$roll_no=$this->uri->segment(4);
			$data['title']=$this->input->post('title');
			$data['first_name']=$this->input->post('first_name');
			//$data['middle_name']=$this->input->post('middle_name');
			$data['last_name']=$this->input->post('last_name');
			$data['gender']=$this->input->post('gender');
			$data['email_id']=$this->input->post('email_id');
			$data['mobile']=$this->input->post('mobile');
			$data['dob']=$this->input->post('dob');
			$data['adm_category']=$this->input->post('adm_category');
			$data['course']=$this->input->post('course');
			$data['section']=$this->input->post('section');
			$data['adm_date']=$this->input->post('adm_date');			
			$data['entry_level']=$this->input->post('entry_level');
			$data['degree']=$this->input->post('degree');
			$data['entry_by']="hi";

			$data1['entry_by']="hi";
			$data1['roll_no']=$this->input->post('roll_no');
			$data1['college_fee']=$this->input->post('college_fee');
			$data1['hostel_fee']=$this->input->post('hostel_fee');
			$data1['transport_fee']=$this->input->post('transport_fee');
			$data1['tution_fee']=$this->input->post('tution_fee');
			$data1['fee']=$this->input->post('fee');
			$data1['other_fee']=$this->input->post('other_fee');
			$data1['total_fees']=$data1['college_fee']+$data1['hostel_fee']+$data1['transport_fee']+$data1['tution_fee']+$data1['other_fee'];



			$this->db->where('roll_no',$roll_no);
			$this->db->update('stuinfo', $data);

			$this->db->where('roll_no',$roll_no);
			$this->db->update('fee_details', $data1);

			$url = base_url('admin/student/plist');
	        header("Location: $url");
	    }

	    else {
	    	$roll_no=$this->uri->segment(4);
	    	$data['query']=$this->db->get('stuinfo');
	    	$data['adm']=$this->db->get('admission');
	    	$this->db->where('roll_no',$roll_no);
			$data['query1']=$this->db->get('stuinfo');
			$this->db->where('roll_no',$roll_no);
			$data['fees']=$this->db->get('fee_details');
			$data['degr']=$this->db->get('degrees');
			$data['cours']=$this->db->get('courses');
			$data['entrys']=$this->db->get('entry_level');
			
			$this->load->view('admin/studentedit',$data);
		}

	}


	public function master()
	{
		if($this->uri->segment(4))
		{
			$this->db->where('roll_no',$this->uri->segment(4));
			$query=$this->db->get('stuinfo');
			$data=$query->result()[0];
		$this->load->view('admin/stumaster',$data);
		}
	}




	
}
