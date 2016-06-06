<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Languages extends CI_Controller {

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
		if (isset($_POST['language'])) {

			$data['language'] = $_POST['language']; //$_SESSION['username']  
			$data['updated_by'] = "test_user";
			$this->db->insert('languages',$data);

		}


		$query=$this->db->get('languages');
		$data['languages']=$query->result();
		$this->load->view('admin/config/languages',$data);
	}


	public function view()
	{
		if ($this->uri->segment(4)) {
		$this->db->where('language_id',$this->uri->segment(4));
		$query=$this->db->get('languages');
		$data['language']=$query->result()[0];	 

		$query=$this->db->get('languages');
		$data['languages']=$query->result();
		$this->load->view('admin/config/languageview',$data);
		
		}
		
	}

	public function edit()
	{

		if(isset($_POST['language_id'])){	
			$data['language_id']=$_POST['language_id'];
			$data['language']=$_POST['language'];
			$data['updated_by'] = "test_user";  //$_SESSION['username']
			$this->db->where('language_id', $_POST['language_id']);
			$this->db->update('languages', $data);
			$url=base_url('admin/languages');
			 header("Location: $url");

		}
		$this->db->where('language_id',$this->uri->segment(4));
		$query=$this->db->get('languages');
		$data['language']=$query->result()[0];	

		$query=$this->db->get('languages');
		$data['languages']=$query->result();
		$this->load->view('admin/config/languageedit',$data);
		
	}

	public function delete()
	{

			$this->db->where('language_id',$this->uri->segment(4));
			$this->db->delete('languages');	
			$url=base_url('admin/languages');
			header("Location: $url");
		
	}


}

/* End of file Languages.php */
/* Location: ./application/controllers/admin/Languages.php */