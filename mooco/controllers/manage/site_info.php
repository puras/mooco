<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_info extends Admin_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('site_info_model');
    }

    public function index() {
        if (!$this->is_post()) {
            $data['error'] = null;
            $data['site_info'] = $this->site_info_model->find_site_info();
        } else {
            $site_info = array(
                'name'          => $this->input->post('name'),
                'url'           => $this->input->post('url'),
                'address'       => $this->input->post('address'),
                'contacter'     => $this->input->post('contacter'),
                'email'         => $this->input->post('email'),
                'phone'         => $this->input->post('phone'),
                'mobile'        => $this->input->post('mobile'),
                'copyright'     => $this->input->post('copyright'),
                'icp'           => $this->input->post('icp'),
                'is_close'      => $this->input->post('is_close'),
                'close_reason'  => $this->input->post('close_reason'),
                'third_js'      => $this->input->post('third_js')
            );
            // 表单验证
            $error = null;

            if ($error == null) {
                $this->site_info_model->update($site_info);
                redirect($this->go_index());
            } else {
                $data['error'] = $error;
            }
        }

        $this->load->view($this->view_path('index'), $data);
    }
}