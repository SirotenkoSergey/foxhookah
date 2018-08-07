<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once( "application/controllers/Root.php" );

class Welcome extends Root {

	public function index()
	{
		$this->load->model('product_model');
		$data['products'] = $this->product_model->get_all_products();
		$this->render_body('welcome_message', $data);
	}

	public function locations()
	{
		$this->load->model('locations_model');
		$data['stores'] = $this->locations_model->get_stores_by_id(1);
		$this->render_body('locations', $data);
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

	public function product_details() {
		if(isset($_GET['id'])) {
			$this->load->model('product_model');
			$products = $this->product_model->get_product_detail($_GET['id']);
			$data["product_detail"] = $products[0];
			$data["product_resourses"] = $this->product_model->get_product_resourses($_GET['id']);
			$this->render_body('product_detail', $data);
		}
	}
}
