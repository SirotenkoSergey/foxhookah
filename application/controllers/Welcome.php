<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public $partical_views_root = '_shared/';

	public function render_body($view) {
		$this->load->database('foxhookah');
		$data["links"] = $this->db->query('SELECT * FROM resourses');
		$this->load->view($this -> partical_views_root.'header', $data);
		$this->load->view($view);
		$this->load->view($this -> partical_views_root.'footer');
	}

	public function index()
	{
		$this -> render_body('welcome_message');
	}

	public function locations()
	{
		$this->render_body('locations');
	}
	
	public function reviews()
	{
		$this->render_body('reviews');
	}
	public function delivery()
	{
		$this->render_body('delivery');
	}
}
