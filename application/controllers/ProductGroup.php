<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once( "application/controllers/Root.php" );

class ProductGroup extends Root {
    public function index() {
        $this->load->model('product_group_model');
        $data['categories'] = $this->product_group_model->get_categories();
        $this->render_body('categories', $data );
    }

    public function select_category($catId) {
        $data['catId'] = $catId;
        $this->render_body('select_category',$data);
    }

    public function category($cat_id) {

    }
}