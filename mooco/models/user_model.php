<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends MK_Model {
    public function __construct() {
        parent::__construct();
    }

    public function find_by_username($username) {
        return $this->find_by(array('username' => $username));
    }
}