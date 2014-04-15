<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
			$this->load->model('home_model');
			$data = $this->home_model->getTheCourses();
			$header_data['title'] = 'Courses';
			$this->load->view('header', $header_data );
			$result['data'] = $data;
			$this->load->view('courses', $result);
			
	}

	public function classlist() {
			$this->load->model('home_model');
			$data = $this->home_model->getTheClassList();
			$header_data['title'] = 'Classlist';
			$this->load->view('header', $header_data );
			$result['data'] = $data;
			$this->load->view('classlist', $result);
			
	}

	public function profile() {
			$this->load->model('home_model');
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
			$this->load->model('home_model');
			$result = $this->home_model->set_address();
			
	}
	public function set_phone() {
			$this->load->model('home_model');
			$result = $this->home_model->set_phone();
			
	}

	public function logout() {
		$this->session->unset_userdata(array('validated'=>false));
        $this->session->sess_destroy();
        redirect(site_url());
	}
}
