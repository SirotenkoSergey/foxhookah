<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_model extends CI_Model {

    public function get_reviews() {

        $this->db->select();
        $this->db->from('reviews');
        $this->db->join('users', 'users.id = reviews.user_id', 'left');
        $query = $this->db->get();
        return $query->result();
    }
    public function add_review($data) {
        $this->db->insert('reviews',$data);
    }
}
