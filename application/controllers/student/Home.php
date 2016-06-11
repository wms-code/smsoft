<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {


	public function __construct()
	{
		parent::__construct();

	}

	 
	public function index()
	{
		$roll_no=$_SESSION['username'];
		$this->db->where('roll_no',$roll_no);
		$query=$this->db->get('stuinfo');
		$data['query']=$query->result()[0];
		

		$this->db->where('roll_no',$roll_no);
		$query=$this->db->get('fee_details');
		//$data['fees']=$query->result()[0];

		$this->load->view('student/studentmaster',$data);;

	}

	




	
}
