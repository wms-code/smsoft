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
		//create a new country 
		if(isset($_POST['country'])&& $_POST['country'] !=""){	
			$data['country_name'] = $_POST['country']; //$_SESSION['username']  
			$data['updated_by'] = "test_user";
			$this->db->insert('countries',$data);
		}


		if ($this->uri->segment(4)) {

			//edit a country
			if(isset($_POST['country_id'])){	
				$data['country_id']=$_POST['country_id'];
				$data['country_name']=$_POST['country_name'];
				$data['updated_by'] = "test_user";  //$_SESSION['username']
				$this->db->where('country_id', $_POST['country_id']);
				$this->db->update('countries', $data);
				$url=base_url('admin/config/country');
				 header("Location: $url");

			}
			elseif ($this->uri->segment(4)=='delete') {
			$this->db->where('country_id',$this->uri->segment(5));
			$this->db->delete('countries');	
			$url=base_url('admin/config/country');
			header("Location: $url");
			}

		//get view page and edit page country
		$this->db->where('country_id',$this->uri->segment(5));
		$query=$this->db->get('countries');
		$data['country']=$query->result()[0];
		}

	
		//get all countries list
		$query = $this->db->query('SELECT country_id, country_name FROM countries');
		$data['countries'] = $query->result();
		$this->load->view('admin/config/country',$data);

	}
}

/* End of file Config.php */
/* Location: ./application/controllers/Config.php */