<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		if ($this->input->post('username')) {
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');		 
			if ($this->form_validation->run() == TRUE){
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$this->db->where('username', $username);
				$this->db->where('password', $password);			
				$res = $this->db->get('users');
				if($res->num_rows() == 1){
					$userid=$res->result()[0]->user_id;
					$usertype=$res->result()[0]->usertype;
					$this->session->set_userdata('userid', $userid);
					$this->session->set_userdata('username', $username);
					$this->session->set_userdata('usertype', $usertype);
					$url = base_url($usertype);
					header("Location: $url");				
				}
			}	
		}	
	$this->load->view('login');	
	}


	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('usertype');
		$this->session->sess_destroy();
		$url=base_url('login');
		header("Location: $url");
		
	}




}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */