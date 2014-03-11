<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		if(!$this->session->userdata('validated'))
        {
            redirect(site_url());
        } else {
        	$this->load->view('header');
        	$this->load->view('home');
        }
	}

	public function courses() {
			$this->load->model('home_model');
			$data = $this->home_model->getTheCourses();
			$this->load->view('header');
			$result['data'] = $data;
			$this->load->view('courses', $result);
			
	}

	public function profile() {
			$this->load->model('home_model');
			$data = $this->home_model->getTheProfile();
			$this->load->view('header');
			$result['data'] = $data;
			$this->load->view('profile', $result);
			
	}

	public function logout() {
		$this->session->unset_userdata(array('validated'=>false));
        $this->session->sess_destroy();
        redirect(site_url());
	}
}
