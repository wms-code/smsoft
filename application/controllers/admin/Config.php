<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends MY_Controller {


	public function __construct()
	{
		parent::__construct();

	}


	public function index()
	{

		
	}

	public function country()
	{
		//create a new country 
		if(isset($_POST['country'])&& $_POST['country'] !=""){	
			$data['country_name'] = $_POST['country']; //$_SESSION['username']  
			$data['entry_by'] = "test_user";
			$this->db->insert('countries',$data);
		}


		if ($this->uri->segment(4)) {

			//edit a country
			if(isset($_POST['country_id'])){	
				$data['country_id']=$_POST['country_id'];
				$data['country_name']=$_POST['country_name'];
				$data['update_by'] = "test_user";  //$_SESSION['username']
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
			$data['entry_by'] = "test_user";
			$this->db->insert('nationalities',$data);
		}


		if ($this->uri->segment(4)) {

			//edit a nationality
			if(isset($_POST['nationality_id'])){	
				$data['nationality_id']=$_POST['nationality_id'];
				$data['nationality_name']=$_POST['nationality_name'];
				$data['update_by'] = "test_user";  //$_SESSION['username']
				$this->db->where('nationality_id', $_POST['nationality_id']);
				$this->db->update('nationalities', $data);
				$url=base_url('admin/config/nationality');
				 header("Location: $url");

			}
			elseif ($this->uri->segment(4)=='delete') {
			$this->db->where('nationality_id',$this->uri->segment(5));
			$this->db->delete('nationalities');	
			$url=base_url('admin/config/nationality');
			header("Location: $url");
			}

		//get view page and edit page nationality
		$this->db->where('nationality_id',$this->uri->segment(5));
		$query=$this->db->get('nationalities');
		$data['national']=$query->result()[0];
		}

	
		//get all nationality list
		$query = $this->db->query('SELECT nationality_id, nationality_name FROM nationalities');
		$data['nationality'] = $query->result();
		$this->load->view('admin/config/nationality',$data);

	}

	public function course()
	{
		//create a new course 
		if(isset($_POST['course'])&& $_POST['course'] !=""){	
			$data['course_name'] = $_POST['course']; //$_SESSION['username'] 
			$data['course_alias'] = $_POST['course_alias'];
			$data['course_intake']=$_POST['course_intake'];
			$data['entry_by'] = "test_user";
			$this->db->insert('courses',$data);
		}


		if ($this->uri->segment(4)) {

			//edit a course
			if(isset($_POST['course_id'])){	
				$data['course_id']=$_POST['course_id'];
				$data['course_name']=$_POST['course_name'];
				$data['course_alias'] = $_POST['course_alias'];
				$data['course_intake']=$_POST['course_intake'];
				$data['update_by'] = "test_user";  //$_SESSION['username']
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
	public function category()
	{
		//create a new country 
		if(isset($_POST['category'])&& $_POST['category'] !=""){	
			$data['category_name'] = $_POST['category']; //$_SESSION['username']  
			$data['entry_by'] = "test_user";
			$this->db->insert('categories',$data);
		}


		if ($this->uri->segment(4)) {

			//edit a country
			if(isset($_POST['category_id'])){	
				$data['category_id']=$_POST['category_id'];
				$data['category_name']=$_POST['category_name'];
				$data['update_by'] = "test_user";  //$_SESSION['username']
				$this->db->where('category_id', $_POST['category_id']);
				$this->db->update('categories', $data);
				$url=base_url('admin/config/category');
				 header("Location: $url");

			}
			elseif ($this->uri->segment(4)=='delete') {
			$this->db->where('category_id',$this->uri->segment(5));
			$this->db->delete('categories');	
			$url=base_url('admin/config/category');
			header("Location: $url");
			}

		//get view page and edit page country
		$this->db->where('category_id',$this->uri->segment(5));
		$query=$this->db->get('categories');
		$data['category']=$query->result()[0];
		}

	
		//get all countries list
		$query = $this->db->query('SELECT category_id, category_name FROM categories');
		$data['categories'] = $query->result();
		$this->load->view('admin/config/admissioncat',$data);

	}
	public function degree()
	{
		//create a new country 
		if(isset($_POST['degree'])&& $_POST['degree'] !=""){	
			$data['degree_name'] = $_POST['degree']; //$_SESSION['username']  
			$data['degree_alias']=$_POST['degree_alias'];
			$data['entry_by'] = "test_user";
			$this->db->insert('degrees',$data);
		}


		if ($this->uri->segment(4)) {

			//edit a country
			if(isset($_POST['degree_id'])){	
				$data['degree_id']=$_POST['degree_id'];
				$data['degree_name']=$_POST['degree_name'];
				$data['degree_alias']=$_POST['degree_alias'];
				$data['update_by'] = "test_user";  //$_SESSION['username']
				$this->db->where('degree_id', $_POST['degree_id']);
				$this->db->update('degrees', $data);
				$url=base_url('admin/config/degree');
				 header("Location: $url");

			}
			elseif ($this->uri->segment(4)=='delete') {
			$this->db->where('degree_id',$this->uri->segment(5));
			$this->db->delete('degrees');	
			$url=base_url('admin/config/degree');
			header("Location: $url");
			}

		//get view page and edit page country
		$this->db->where('degree_id',$this->uri->segment(5));
		$query=$this->db->get('degrees');
		$data['degree']=$query->result()[0];
		}

	
		//get all countries list
		$query = $this->db->query('SELECT degree_id,degree_name,degree_alias FROM degrees');
		$data['degrees'] = $query->result();
		$this->load->view('admin/config/degree',$data);

	}
	public function entry()
	{
		//create a new country 
		if(isset($_POST['entry_level'])&& $_POST['entry_level'] !=""){	
			$data['entry_level'] = $_POST['entry_level']; //$_SESSION['username']  
			$data['entry_by'] = "test_user";
			$this->db->insert('entry_level',$data);
		}


		if ($this->uri->segment(4)) {

			//edit a country
			if(isset($_POST['entry_level_id'])){	
				$data['entry_level_id']=$_POST['entry_level_id'];
				$data['entry_level']=$_POST['entry_level'];
				$data['update_by'] = "test_user";  //$_SESSION['username']
				$this->db->where('entry_level_id', $_POST['entry_level_id']);
				$this->db->update('entry_level', $data);
				$url=base_url('admin/config/entry');
				 header("Location: $url");

			}
			elseif ($this->uri->segment(4)=='delete') {
			$this->db->where('entry_level_id',$this->uri->segment(5));
			$this->db->delete('entry_level');	
			$url=base_url('admin/config/entry');
			header("Location: $url");
			}

		//get view page and edit page country
		$this->db->where('entry_level_id',$this->uri->segment(5));
		$query=$this->db->get('entry_level');
		$data['entrylevel']=$query->result()[0];
		}

	
		//get all countries list
		$query = $this->db->query('SELECT entry_level_id, entry_level FROM entry_level');
		$data['entry_level'] = $query->result();
		$this->load->view('admin/config/entry',$data);

	}


	public function bank()
	{
		//create a new country 
		if(isset($_POST['bank'])&& $_POST['bank'] !=""){	
			$data['bank_name'] = $_POST['bank']; //$_SESSION['username']  
			$data['bank_alias']=$_POST['bank_alias'];
			$data['entry_by'] = "test_user";
			$this->db->insert('banks',$data);
		}


		if ($this->uri->segment(4)) {

			//edit a country
			if(isset($_POST['bank_id'])){	
				$data['bank_id']=$_POST['bank_id'];
				$data['bank_name']=$_POST['bank_name'];
				$data['bank_alias']=$_POST['bank_alias'];
				$data['update_by'] = "test_user";  //$_SESSION['username']
				$this->db->where('bank_id', $_POST['bank_id']);
				$this->db->update('banks', $data);
				$url=base_url('admin/config/bank');
				 header("Location: $url");

			}
			elseif ($this->uri->segment(4)=='delete') {
			$this->db->where('bank_id',$this->uri->segment(5));
			$this->db->delete('banks');	
			$url=base_url('admin/config/bank');
			header("Location: $url");
			}

		//get view page and edit page country
		$this->db->where('bank_id',$this->uri->segment(5));
		$query=$this->db->get('banks');
		$data['bank']=$query->result()[0];
		}

	
		//get all countries list
		$query = $this->db->query('SELECT bank_id,bank_name,bank_alias FROM banks');
		$data['banks'] = $query->result();
		$this->load->view('admin/config/bank',$data);

	}



	public function designation()
	{
		//create a new designation 
		if(isset($_POST['designation'])&& $_POST['designation'] !=""){	
			$data['designation_name'] = $_POST['designation']; //$_SESSION['username']  
			$data['entry_by'] = "test_user";
			$this->db->insert('designation',$data);
		}


		if ($this->uri->segment(4)) {

			//edit a designation
			if(isset($_POST['designation_id'])){	
				$data['designation_id']=$_POST['designation_id'];
				$data['designation_name']=$_POST['designation_name'];
				$data['update_by'] = "test_user";  //$_SESSION['username']
				$this->db->where('designation_id', $_POST['designation_id']);
				$this->db->update('designation', $data);
				$url=base_url('admin/config/designation');
				 header("Location: $url");

			}
			elseif ($this->uri->segment(4)=='delete') {
			$this->db->where('designation_id',$this->uri->segment(5));
			$this->db->delete('designation');	
			$url=base_url('admin/config/designation');
			header("Location: $url");
			}

		//get view page and edit page designation
		$this->db->where('designation_id',$this->uri->segment(5));
		$query=$this->db->get('designation');
		$data['designationrow']=$query->result()[0];
		}

		$query = $this->db->query('SELECT designation_id, designation_name FROM designation');
		$data['designation'] = $query->result();
		$this->load->view('admin/config/designation',$data);

	

}

public function appointment()
	{
		//create a new appointment 
		if(isset($_POST['appscategory'])&& $_POST['appscategory'] !=""){	
			//echo "yes";
			//exit;
			$data['app_category'] = $_POST['appscategory']; //$_SESSION['username']  
			$data['entry_by'] = "test_user";
			$this->db->insert('appointment',$data);
		}


		if ($this->uri->segment(4)) {

			//edit a appointment
			if(isset($_POST['app_id'])){	
				$data['app_id']=$_POST['app_id'];
				$data['app_category']=$_POST['app_category'];
				$data['update_by'] = "test_user";  //$_SESSION['username']
				$this->db->where('app_id', $_POST['app_id']);
				$this->db->update('appointment', $data);
				$url=base_url('admin/config/appointment');
				 header("Location: $url");

			}
			elseif ($this->uri->segment(4)=='delete') {
			$this->db->where('app_id',$this->uri->segment(5));
			$this->db->delete('appointment');	
			$url=base_url('admin/config/appointment');
			header("Location: $url");
			}

		//get view page and edit page appointment
		$this->db->where('app_id',$this->uri->segment(5));
		$query=$this->db->get('appointment');
		$data['appointmentrow']=$query->result()[0];
		}

		$query = $this->db->query('SELECT app_id, app_category FROM appointment');
		$data['appointment'] = $query->result();
		$this->load->view('admin/config/appointment',$data);

	

}

}
