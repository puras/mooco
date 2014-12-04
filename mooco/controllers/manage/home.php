<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Admin_Controller {
    public function __construct() {
        parent::__construct();

        $this->layout = 'manage/layout/default';
    }

    public function index() {
        $this->load->view('manage/home/index');
    }
}