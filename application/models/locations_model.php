<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locations_model extends CI_Model {

    public function get_stores_by_id($city_id) {
        $this->db->select();
        $this->db->from('stores');
        $this->db->where('city_id', $city_id);
        $query = $this->db->get();
        return $query->result();
    }
}
