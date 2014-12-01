<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->layout = 'manage/layout/default';
    }

    public function index() {
        // echo 'hello world';
        $this->load->view('manage/home/index');
    }
}