<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function get_users() {
        $query = $this->db->get('users');
        return $query->result_array();  
    }

    public function add_user($data) {
        $check = $this->check_user($data['email']);
        if(!$check) {
            $this->db->insert('users',$data);
            return $this->check_user($data['email']);
        }
        return $check;
    }

    private function check_user($email) {
        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('email',$email);
        $query = $this->db->get();
        $row = $query->first_row('array');
        if(isset($row['id'])){
            return $row['id'];
        }
        return false;
    }

}
