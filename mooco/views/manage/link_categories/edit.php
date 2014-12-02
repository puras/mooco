<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    $data['action'] = base_url("/manage/link_category/$link_category->id");
    $data['form_title'] = '修改';
    $data['method'] = 'put';
    $this->load->view('manage/link_categories/_form', $data);