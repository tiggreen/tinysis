<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	    $this->load->model('home_model');
	}

	public function index() {

		if(!$this->session->userdata('validated'))
        {
            redirect(site_url());
        } else {
        	$header_data['title'] = 'Home';
        	$this->load->view('header', $header_data);
        	$this->load->view('home');
        }
	}

	public function courses() {
			$data = $this->home_model->getTheCourses();
			$header_data['title'] = 'Courses';
			$this->load->view('header', $header_data );
			$result['data'] = $data;
			$this->load->view('courses', $result);
			
	}

	public function classlist() {
			$data = $this->home_model->getTheClassList();
			$header_data['title'] = 'Classlist';
			$this->load->view('header', $header_data );
			$result['data'] = $data;
			$this->load->view('classlist', $result);
			
	}
	

	public function profile() {
			$data = $this->home_model->getTheProfile();
			$header_data['title'] = 'Profile';
			$this->load->view('header', $header_data);
			$result['data'] = $data;
			if ($this->session->userdata('role') == 1) {
				$this->load->view('profile', $result);
			} else if ($this->session->userdata('role') == 2) {
				$this->load->view('inst_profile', $result);
			}
			
	}
	public function set_address() {

			$result = $this->home_model->set_address();
			
	}
	public function set_phone() {
			$result = $this->home_model->set_phone();
			
	}
	public function add_course_view() {
			$header_data['title'] = 'Add Course';
			$this->load->view('header', $header_data );
			$this->load->view('add_course');
			
	}
	public function add_student_view() {
			$header_data['title'] = 'Add Student';
			$this->load->view('header', $header_data );
			$this->load->view('add_student');
			
	}

	public function add_course() {
			$result = $this->home_model->add_course();
			if ($result) {
				$data['message'] = '<div class="alert alert-success">
				The course was successfuly added.</div>';

			} else {
				$data['message'] = '<div class="alert alert-danger">Some error occured.
				 Try to add the course again.</div>';
			}
			$header_data['title'] = 'Add Course';
			$this->load->view('header', $header_data );
			$this->load->view('add_course', $data);
			
	}
	public function del_course($course_id) {
			$result = $this->home_model->del_course($course_id);
			if ($result) {
				$data['message'] = '<div class="alert alert-success">
				The course was successfuly deleted.</div>';

			} else {
				$data['message'] = '<div class="alert alert-danger">Some error occured.
				 Try to delete the course again.</div>';
			}
			$header_data['title'] = 'Delete Course';
			$this->load->view('header', $header_data );
			$this->load->view('courses', $data);
			
	}
	public function del_student($student_id) {
			$result = $this->home_model->del_student($student_id);
			if ($result) {
				$data['message'] = '<div class="alert alert-success">
				The student was successfuly deleted.</div>';

			} else {
				$data['message'] = '<div class="alert alert-danger">Some error occured.
				 Try to delete the student again.</div>';
			}
			$header_data['title'] = 'Delete Student';
			$this->load->view('header', $header_data );
			$this->load->view('classlist', $data);
			
	}

	public function logout() {
		$this->session->unset_userdata(array('validated'=>false));
        $this->session->sess_destroy();
        redirect(site_url());
	}
}
