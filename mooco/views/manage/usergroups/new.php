<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    $data['action'] = base_url('/manage/usergroup');
    $data['form_title'] = '添加';
    $data['method'] = 'post';
    $this->load->view('manage/usergroups/_form', $data);