<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends Admin_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->model('article_cate_model');
    }

    public function index() {
    // $data['article_cates'] = $this->article_cate_model->find_all();
    // if ($this->is_ajax()) {
    //   echo json_encode($data); 
    //   exit;
    // }
        $data = array();
        $this->load->view($this->view_path('index'), $data);
    }
}