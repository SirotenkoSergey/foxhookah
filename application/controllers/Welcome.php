<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public $partical_views_root = '_shared/';

	public function render_body($view, $data = null) {
		$this->load->database('foxhookah');
		$data["links"] = $this->db->query('SELECT * FROM resourses');
		$this->load->view($this -> partical_views_root.'header', $data);
		$this->load->view($view, $data);
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
		$this->load->model('review_model');
		$this->load->model('user_model');
		if($this->new_review_isset()) {
			$new_user_data = array(
				'user_firstname' => $_POST['user_firstname'],
				'user_secondname' => $_POST['user_secondname'],
				'email' => $_POST['email'],
			);	
			$user_id = $this->user_model->add_user($new_user_data);
			$new_review_data = array(
				'content' => $_POST['content'],
				'user_id' => $user_id,
			);
			$this->review_model->add_review($new_review_data);
		}

		$data['reviews'] = $this->review_model->get_reviews();
		$this->render_body('reviews', $data);
	}
	public function delivery()
	{
		$this->render_body('delivery');
	}

	private function new_review_isset() {
		return isset($_POST['user_firstname']) && isset($_POST['user_secondname']) && isset($_POST['email']) && isset($_POST['content']);
	}
}
