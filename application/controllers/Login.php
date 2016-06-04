<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		if ($this->input->post('username')) {
			$this->form_validation->set_rules('username', 'Email Id','required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
	  		if ($this->form_validation->run() == FALSE)
            {

                   $this->load->view('login');
            }
            else
            {
                $username = $this->input->post('username');
				$password = $this->input->post('password');
				$this->db->where('user_email', $username);
				$this->db->where('user_password', $password);			
				$res = $this->db->get('users');
				if($res->num_rows() == 1){
					$userid=$res->result()[0]->user_id;
					$usertype=$res->result()[0]->role_id;
					$this->session->set_userdata('userid', $userid);
					$this->session->set_userdata('username', $username);
					$this->session->set_userdata('usertype', $usertype);
					if ($usertype==1) {					
					$url = base_url('admin');
					}
					else
					{
						$url = base_url();
					}



					header("Location: $url");				
				}  
            }
	}
	else
	{
       $this->load->view('login');
		
	}

	}


	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		if($_SESSION['usertype']=="admin") $url = base_url("admin/");
		else $url=base_url();
		header("Location: $url");
		
	}

























        }

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */