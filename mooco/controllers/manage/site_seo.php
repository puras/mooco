<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_seo extends Admin_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('site_seo_model');
    }

    public function index() {
        if (!$this->is_post()) {
            $data['error'] = null;
            $data['site_seo'] = $this->site_seo_model->find_site_seo();
        } else {
            $site_seo = array(
                'key_words'   => $this->input->post('key_words'),
                'description' => $this->input->post('description'),
                'type'        => 'site_info',
                'key'         => '0'
            );
            // 表单验证
            $error = null;

            if ($error == null) {
                $this->site_seo_model->update($site_seo);
                redirect($this->go_index());
            } else {
                $data['error'] = $error;
            }
        }

        $this->load->view($this->view_path('index'), $data);
    }
}