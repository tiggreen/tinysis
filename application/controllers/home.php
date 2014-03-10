<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		if(!$this->session->userdata('validated'))
        {
            redirect(site_url());
        } else {
        	$this->load->view('home');
        }
	}
	public function logout() {
		$this->session->unset_userdata(array('validated'=>false));
        $this->session->sess_destroy();
        redirect(site_url());
	}
}
