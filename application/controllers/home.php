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
			$this->load->view('courses', $data);
			
	}

	public function logout() {
		$this->session->unset_userdata(array('validated'=>false));
        $this->session->sess_destroy();
        redirect(site_url());
	}
}
