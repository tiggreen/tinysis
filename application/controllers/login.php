<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->load->view('index');
	}

	public function process() {
		$this->load->model('login_model');
	    $result = $this->login_model->validate();
	    if($result === TRUE) {
	        redirect('home', 'refresh');

	    } else {
	            $this->session->set_flashdata('incorrect_data_input', LOGIN_INVALID_USERAME_OR_PASS);
	            redirect(site_url());   
	    }        
	}
}
