<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends Admin_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array();
        $this->load->view($this->view_path('index'), $data);
    }
}