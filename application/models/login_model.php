<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * Description: Login model class
 */
class Login_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->library('encrypt');
    }

    public function validate() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() !== FALSE) {

        $email = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));

        $this->db->where('email', $email);
        $this->db->where('password', $this->encrypt->sha1 ($password) );

        $query = $this->db->get('user');

        if( $query->num_rows() == 1) {
            // If there is a user, then create a session data for it.

            $row = $query->row();
            $user_id = $row->id;
            $user_role = $row->role; 

            /*Get the user information. If the user is a student (role == 1)
             then query the student's table. If the user is an instructor (role==2)
             then query the instructor's table. For admin and super user roles
             we don't query and we take as it is since we don't keep their
             personal info in the database.   
            */

            if ($user_role == 1 ) {

                $this->db->where('user_id', $user_id);
                $query_student = $this->db->get('student');
                if( $query_student->num_rows() == 1) {

                    $row_student = $query_student->row();
                    $data['user_id'] = $user_id;

                    $data['fname'] = $row_student->fname;
                    $data['lname'] = $row_student->fname;
                    $data['email'] = $row->email;
                    $data['role'] = 1;
                    $data['validated'] = TRUE;
                    $this->session->set_userdata($data);
                    return TRUE;

                } else {
                    return FALSE;
                }
                
            } else if ($user_role == 2) {

                $this->db->where('user_id', $user_id);
                $query_instructor = $this->db->get('instructor');
                if( $query_instructor -> num_rows() == 1) {

                    $row_instructor = $query_instructor->row();
                    $data['user_id'] = $user_id;

                    $data['fname'] = $row_instructor->fname;
                    $data['lname'] = $row_instructor->fname;
                    $data['email'] = $row->email;
                    $data['role'] = 2;
                    $data['validated'] = TRUE;
                    $this->session->set_userdata($data);
                    return TRUE;

                } else {
                    return FALSE;
                }

            } else if ($user_role == 3) {
                $data['user_id'] = $user_id;
                $data['email'] = $row->email;
                $data['role'] = 3;
                $data['validated'] = TRUE;
                $this->session->set_userdata($data);
                return TRUE;

            } else if ($user_role == 4) {
                $data['user_id'] = $user_id;
                $data['email'] = $row->email;
                $data['role'] = 4;
                $data['validated'] = TRUE;
                $this->session->set_userdata($data);
                return TRUE;
            }

                         
        } else {
            return FALSE;
        }

        } else {
            return FALSE;
        }

    }
}