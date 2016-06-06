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

	public function nationality()
	{
		//create a new nationality 
		if(isset($_POST['nationality'])&& $_POST['nationality'] !=""){	
			$data['nationality_name'] = $_POST['nationality']; //$_SESSION['username']  
			$data['updated_by'] = "test_user";
			$this->db->insert('nationality',$data);
		}


		if ($this->uri->segment(4)) {

			//edit a nationality
			if(isset($_POST['nationality_id'])){	
				$data['nationality_id']=$_POST['nationality_id'];
				$data['nationality_name']=$_POST['nationality_name'];
				$data['updated_by'] = "test_user";  //$_SESSION['username']
				$this->db->where('nationality_id', $_POST['nationality_id']);
				$this->db->update('nationality', $data);
				$url=base_url('admin/config/nationality');
				 header("Location: $url");

			}
			elseif ($this->uri->segment(4)=='delete') {
			$this->db->where('nationality_id',$this->uri->segment(5));
			$this->db->delete('nationality');	
			$url=base_url('admin/config/nationality');
			header("Location: $url");
			}

		//get view page and edit page nationality
		$this->db->where('nationality_id',$this->uri->segment(5));
		$query=$this->db->get('nationality');
		$data['national']=$query->result()[0];
		}

	
		//get all nationality list
		$query = $this->db->query('SELECT nationality_id, nationality_name FROM nationality');
		$data['nationality'] = $query->result();
		$this->load->view('admin/config/nationality',$data);

	}

	public function course()
	{
		//create a new course 
		if(isset($_POST['course'])&& $_POST['course'] !=""){	
			$data['course_name'] = $_POST['course']; //$_SESSION['username']  
			$data['course_intake']=$_POST['course_intake'];
			$data['updated_by'] = "test_user";
			$this->db->insert('courses',$data);
		}


		if ($this->uri->segment(4)) {

			//edit a course
			if(isset($_POST['course_id'])){	
				$data['course_id']=$_POST['course_id'];
				$data['course_name']=$_POST['course_name'];
				$data['course_intake']=$_POST['course_intake'];
				$data['updated_by'] = "test_user";  //$_SESSION['username']
				$this->db->where('course_id', $_POST['course_id']);
				$this->db->update('courses', $data);
				$url=base_url('admin/config/course');
				 header("Location: $url");

			}
			elseif ($this->uri->segment(4)=='delete') {
			$this->db->where('course_id',$this->uri->segment(5));
			$this->db->delete('courses');	
			$url=base_url('admin/config/course');
			header("Location: $url");
			}

		//get view page and edit page course
		$this->db->where('course_id',$this->uri->segment(5));
		$query=$this->db->get('courses');
		$data['course']=$query->result()[0];
		}

	
		//get all courses list
		$query=$this->db->get('courses');
		$data['courses'] = $query->result();
		$this->load->view('admin/config/course',$data);

	}
}

/* End of file Config.php */
/* Location: ./application/controllers/Config.php */