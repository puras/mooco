<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Admin_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array();
        $this->load->view($this->view_path('index'), $data);
    }

    public function login() {
        $this->layout = false;
        if (!$this->is_post()) {
            $params = array('error' => null);
        } else {
            $username = trim($this->input->post('username'));
            $passwd = trim($this->input->post('passwd'));

            $error = null;

            if (empty($username) || empty($passwd)) $error = '用户名或密码不能为空';
            else if (false) $error = '验证码错误'; 
            else {
                $user = null;

                // if ($user == null) $error = '没有此用户';
                if ($user == null || md5($passwd) != $user->passwd) $error = '用户名或密码错误';

                if ($error == null) {
                    // TODO
                }
            }

            $params = array('error' => $error);
        }
        $this->load->view($this->view_path('login'), $params);
    }

    public function logout() {
        redirect(base_url('/manage'));
    }
}