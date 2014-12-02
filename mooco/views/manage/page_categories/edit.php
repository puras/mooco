<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    $data['action'] = base_url("/manage/page_category/$page_category->id");
    $data['form_title'] = '修改';
    $data['method'] = 'put';
    $this->load->view('manage/page_categories/_form', $data);