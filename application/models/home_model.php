<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
        } else if ($role == 3 || $role == 4 ) {
            $query = $this->db->get("course");
            $ind = 0;
            foreach ($query->result() as $row) {
                $result_data[$ind]['id'] = $row->id;
                $result_data[$ind]['number'] = $row->number;
                $result_data[$ind]['name'] =  $row->name;
                $result_data[$ind]['description'] = $row->description;
                $ind++;
            }
        }
        return $result_data;
    }

    public function getTheClassList() {

        $user_id = $this->session->userdata('user_id');
        $role = $this->session->userdata('role');
        $result_data = array();
        if ( $role == 2 ) {

            $sql = "SELECT courses_teaching FROM instructor  WHERE user_id = ? ";
            $query = $this->db->query($sql, array($user_id));
            $ind = 0; 
            if ($query->num_rows() > 0 ) {
                    $rw = $query->row();
                    $courses = explode (";", $rw->courses_teaching);

                    $query_students = $this->db->get('student');
                    foreach ($query_students->result() as $row) {

                        $studentCourses = explode (";", $row->courses_taking);
                        $matched_courses = array_intersect ($courses, $studentCourses);
                        if (!empty($matched_courses)) {
                                $result_data[$ind]['id'] = $row->id;
                                $result_data[$ind]['fname'] = $row->fname;
                                $result_data[$ind]['lname'] =  $row->lname;
                                $result_data[$ind]['suid'] = $row->suid;
                                $ind++;
                        }
                    }
            }
            
        } else if ( $role == 3 || $role == 4 ) {
            
            $query_students = $this->db->get('student');
            $ind = 0;
            foreach ($query_students->result() as $row) {
                $result_data[$ind]['id'] = $row->id;
                $result_data[$ind]['fname'] = $row->fname;
                $result_data[$ind]['lname'] =  $row->lname;
                $result_data[$ind]['suid'] = $row->suid;
                $ind++;
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
        } else if ($role == 2) {

            $sql = "SELECT * FROM instructor  WHERE user_id = ? "; 
            $query = $this->db->query($sql, array($user_id));
            $row = $query->row();
            if ($query->num_rows() > 0 ) {
                $result_data['id'] = $row->id;
                $result_data['fname'] =  $row->fname;
                $result_data['lname'] = $row->lname;
                $result_data['phone'] = $row->phone;
            }
        }
        return $result_data;
    }
    public function set_address() {

        $user_id = $this->session->userdata('user_id');
        $role = $this->session->userdata('role');
        $result_data = array();
        $this->load->library('form_validation');
        if ($role == 1) {
      
            $this->form_validation->set_rules('value', 'Address', 'trim|required');
            $this->form_validation->set_rules('pk', 'Id', 'trim|required|numeric');
            $address = $this->security->xss_clean($this->input->post('value'));
            $id = $this->security->xss_clean($this->input->post('pk'));


            if ($this->form_validation->run() !== FALSE)
            {   
                $sql = "SELECT * FROM student JOIN user 
                        ON student.user_id = user.id 
                        WHERE student.id = ? "; 

                $query = $this->db->query($sql, array($id));
                $row = $query->row();

                if ($query->num_rows() > 0 ) {
                    $data = array(
                                   'address' => $address,
                                );

                    $this->db->where('id', $id);
                    $this->db->update('student', $data);
                    return TRUE; 

                } else {
                    return FALSE;
                }
            } else {
                return FALSE;
            }
        }
    }

    public function set_phone() {

        $user_id = $this->session->userdata('user_id');
        $role = $this->session->userdata('role');
        $result_data = array();
        // If the user is a student
        $this->load->library('form_validation');
                            var_dump($role);
        if ($role == 1) {
      
            $this->form_validation->set_rules('value', 'Phone', 'trim|numeric');
            $this->form_validation->set_rules('pk', 'Id', 'trim|required|numeric');
            $phone = $this->security->xss_clean($this->input->post('value'));
            $id = $this->security->xss_clean($this->input->post('pk'));

            
            if ($this->form_validation->run() !== FALSE)
            {   
                $sql = "SELECT * FROM student JOIN user 
                        ON student.user_id = user.id 
                        WHERE student.id = ? "; 

                $query = $this->db->query($sql, array($id));
                $row = $query->row();

                if ($query->num_rows() > 0 ) {
                    $data = array(
                                   'phone' => $phone,
                                );

                    $this->db->where('id', $id);
                    $this->db->update('student', $data);
                    return TRUE; 

                } else {
                    return FALSE;
                }
            } else {
                return FALSE;
            }
        // If the user is an instructor
        } else if ($role == 2) {
    
            $this->form_validation->set_rules('value', 'Phone', 'trim|numeric');
            $this->form_validation->set_rules('pk', 'Id', 'trim|required|numeric');
            $phone = $this->security->xss_clean($this->input->post('value'));
            $id = $this->security->xss_clean($this->input->post('pk'));
            
            if ($this->form_validation->run() !== FALSE)
            {   
                $sql = "SELECT * FROM instructor JOIN user 
                        ON instructor.user_id = user.id 
                        WHERE instructor.id = ? "; 
                $query = $this->db->query($sql, array($id));
                $row = $query->row();

                if ($query->num_rows() > 0 ) {
                    $data = array(
                                   'phone' => $phone
                                );

                    $this->db->where('id', $id);
                    $this->db->update('instructor', $data);
                    return TRUE; 

                } else {
                    return FALSE;
                }
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
    public function add_course() {

        $role = $this->session->userdata('role');
        if ($role == 1 || $role == 2) return FALSE;
        $this->load->library('form_validation');
        $name = $this->security->xss_clean($this->input->post('name'));
        $number = $this->security->xss_clean($this->input->post('number'));
        $desc = $this->security->xss_clean($this->input->post('desc'));
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('number', 'Number', 'trim|required|numeric');
        $this->form_validation->set_rules('desc', 'Desc', 'trim');

        if ($this->form_validation->run() !== FALSE) {   
            
            $data = array(
               'name' => $name ,
               'number' => $number ,
               'description' => $desc
            );

            $this->db->insert('course', $data); 
            return TRUE; 

        } else {
            return FALSE;
        }
    }

    public function del_course($course_id) {

        $role = $this->session->userdata('role');
        if ($role != 4) return FALSE;

        $sql = "SELECT name FROM course
                WHERE  id = ? "; 
        $query = $this->db->query($sql, array($course_id));
        if ($query->num_rows() > 0 ) {
            $this->db->delete('course', array('id' => $course_id)); 
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function del_student($student_id) {

        $role = $this->session->userdata('role');
        if ($role != 4) return FALSE;

        $sql = "SELECT fname FROM student
                WHERE  id = ? "; 
        $query = $this->db->query($sql, array($student_id));
        if ($query->num_rows() > 0 ) {
            $this->db->delete('student', array('id' => $student_id)); 
            return TRUE;
        } else {
            return FALSE;
        }
    }

}