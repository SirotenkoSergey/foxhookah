<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    public function get_all_products() {
        $query = $this->db->get('products');
        return $query->result_array();  
    }
    public function get_product_detail($id) {
        $this->db->select();
        $this->db->from('products');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

}
