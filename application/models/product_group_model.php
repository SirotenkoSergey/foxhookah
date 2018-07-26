<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_group_model extends CI_Model {

    public function get_categories() {
        $query = $this->db->get('categories');
        return $query->result_array();  
    }
}
