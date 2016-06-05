<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {


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
		//TODO: Need change in update_by once login module completed
		if(isset($_POST['country'])){	
			$data['country_name'] = $_POST['country']; //$_SESSION['username']
			$data['updated_by'] = "test_user";
			$this->db->insert('countries',$data);
		}

		if ($this->uri->segment(4)) {

			$this->db->where('country_id',$this->uri->segment(5));
			$query=$this->db->get('countries');
			$data['country']=$query->result()[0];

		}

	
		$query = $this->db->query('SELECT country_id, country_name FROM countries');
		$data['countries'] = $query->result();
		$this->load->view('admin/config/country',$data);

	}
}

/* End of file Config.php */
/* Location: ./application/controllers/Config.php */