<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    $data['action'] = base_url("/manage/user/$user->id");
    $data['form_title'] = '修改';
    $data['method'] = 'put';
    $this->load->view('manage/users/_form', $data);