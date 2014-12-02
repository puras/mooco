<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    $data['action'] = base_url('/manage/page_category');
    $data['form_title'] = '添加';
    $data['method'] = 'post';
    $this->load->view('manage/page_categories/_form', $data);