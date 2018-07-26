<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Root extends CI_Controller {
    public $partical_views_root = '_shared/';
	public function render_body($view, $data = null) {
		$this->load->database('foxhookah');
		$data["links"] = $this->db->query('SELECT * FROM resourses');
		$this->load->view($this -> partical_views_root.'header', $data);
		$this->load->view($view, $data);
		$this->load->view($this -> partical_views_root.'footer');
	}
}
?>