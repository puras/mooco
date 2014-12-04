<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Admin_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('usergroup_model');
    }

    public function index() {
        $data['users'] = $this->user_model->find_all();
        $this->load->view($this->view_path('index'), $data);
    }

    public function show($id) {
        $data['user'] = $this->user_model->find_by_id($id);
        $this->load->view($this->view_path('show'));
    }

    public function new_form() {
        $data['user'] = new stdClass();
        $data['usergroups'] = $this->usergroup_model->find_all();
        $this->load->view($this->view_path('new'), $data);
    }

    public function edit($id) {
        $data['user'] = $this->user_model->find_by_id($id);
        $data['usergroups'] = $this->usergroup_model->find_all();
        $this->load->view($this->view_path('edit'), $data);
    }

    public function create() {
        $user = $this->_form_data();
        $user['passwd'] = md5('123456');
        $user['created_at'] = Date('Y-m-d H:i:s');
        if (!isset($user['nickname']) || empty($user['nickname'])) {
            $user['nickname'] = $user['username'];
        }
        $this->user_model->insert($user);

        redirect($this->go_index());
    }

    public function update($id) {
        $user = $this->_form_data();
        if (!isset($user['nickname']) || empty($user['nickname'])) {
            $user['nickname'] = $user['username'];
        }
        $this->user_model->update($user, array('id' => $id));
        redirect($this->go_index());
    }

    public function delete($id) {
        $this->user_model->delete($id);
        redirect($this->go_index());
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
                $user = $this->user_model->find_by_username($username);

                // if ($user == null) $error = '没有此用户';
                if ($user == null || md5($passwd) != $user->passwd) $error = '用户名或密码错误';

                if ($error == null) {
                    $this->current_user($user);
                    $this->go(base_url('/manage'));
                }
            }

            $params = array('error' => $error);
        }
        $this->load->view($this->view_path('login'), $params);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('/manage'));
    }

    private function _form_data() {
        return array(
            'username'          => $this->input->post('username'),      
            'nickname'      => $this->input->post('nickname'),
            // 'passwd'       => md5($this->input->post('passwd')),
            'usergroup_id'  => $this->input->post('usergroup_id'),
            'phone'         => $this->input->post('phone'),
            'wechat'        => $this->input->post('wechat'),
            'qq'            => $this->input->post('qq'),
            'email'         => $this->input->post('email'),
            'addr'          => $this->input->post('addr')
        );
    }

}