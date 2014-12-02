<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Front_Controller {
    function __construct() {
        parent::__construct();

        $this->view_prefix = 'themes/' . $this->template . '/home/';
    }

    public function index() {
        $this->load->view($this->view_prefix . 'index');
    }
}