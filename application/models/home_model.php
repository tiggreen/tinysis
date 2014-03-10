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
        if ($role == 1) {

            $sql = "SELECT courses_taking FROM student  WHERE id = ? "; 
            $query = $this->db->query($sql, array($user_id));
            $row = $query->row();
            $courses = explode (";", $row->courses_taking);
            $result_data = array();
            foreach ($courses as $course_id)
            {
                $sql_course = "SELECT * FROM course  WHERE id = ? "; 
                $query_course = $this->db->query($sql_course, array($course_id));
                $row_course = $query_course->row();
                $course_id = $row_course->id;
                $result_data[$course_id]['number'] = $row_course->number;
                $result_data[$course_id]['name'] =  $row_course->name;
                $result_data[$course_id]['description'] = $row_course->description;
            }
            return $result_data;
        }
    }
}