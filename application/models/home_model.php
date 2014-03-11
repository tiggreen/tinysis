<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * Description: Login model class
 */
class Home_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->library('encrypt');
    }

    public function getTheCourses() {

        $user_id = $this->session->userdata('user_id');
        $role = $this->session->userdata('role');
        $result_data = array();
        if ($role == 1 || $role == 2 ) {
            if ($role == 1 ) {
                $sql = "SELECT courses_taking FROM student  WHERE user_id = ? "; 
            } else {
                 $sql = "SELECT courses_teaching FROM instructor  WHERE user_id = ? ";
            }
            $query = $this->db->query($sql, array($user_id));

            if ($query->num_rows() > 0 ) {
                $row = $query->row();
                if ($role == 1 ) {
                     $courses = explode (";", $row->courses_taking);
                } else {
                      $courses = explode (";", $row->courses_teaching);
                }
                foreach ($courses as $course_id)
                {
                    $sql_course = "SELECT * FROM course  WHERE id = ? "; 
                    $query_course = $this->db->query($sql_course, array($course_id));
                    $row_course = $query_course->row();
                    $course_id = $row_course->id;
                    $result_data[$course_id]['id'] = $row_course->id;
                    $result_data[$course_id]['number'] = $row_course->number;
                    $result_data[$course_id]['name'] =  $row_course->name;
                    $result_data[$course_id]['description'] = $row_course->description;
                }
            }
        }
        return $result_data;
    }
    public function getTheProfile() {

        $user_id = $this->session->userdata('user_id');
        $role = $this->session->userdata('role');
        $result_data = array();
        if ($role == 1) {

            $sql = "SELECT * FROM student  WHERE user_id = ? "; 
            $query = $this->db->query($sql, array($user_id));
            $row = $query->row();

            if ($query->num_rows() > 0 ) {
                $result_data['id'] = $row->id;
                $result_data['suid'] = $row->suid;
                $result_data['fname'] =  $row->fname;
                $result_data['lname'] = $row->lname;
                $result_data['address'] = $row->address;
                $result_data['phone'] = $row->phone;
                $result_data['ssn'] = $row->ssn;
            }
        }
        return $result_data;
    }
}