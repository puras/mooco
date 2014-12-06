<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    $data['action'] = base_url("/manage/page/$page->id");
    $data['form_title'] = '修改';
    $data['method'] = 'put';
    $this->load->view('manage/pages/_form', $data);