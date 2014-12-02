<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    $data['action'] = base_url("/manage/article_category/$article_category->id");
    $data['form_title'] = '修改';
    $data['method'] = 'put';
    $this->load->view('manage/article_categories/_form', $data);