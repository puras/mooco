<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Link extends Admin_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('link_model');
        $this->load->model('link_category_model');
    }

    public function index() {
        $data = $this->link_model->find_all();
        $this->load->view($this->view_path('index'), $data);
    }

    public function show($id) {
        $data['link'] = $this->link_model->find_by_id($id);
        $this->load->view($this->view_path('show'));
    }

    public function new_form() {
        $data['link'] = new stdClass();
        $data['link_categories'] = $this->link_category_model->find_all();
        $this->load->view($this->view_path('new'), $data);
    }

    public function edit($id) {
        $data['link'] = $this->link_model->find_by_id($id);
        $data['link_categories'] = $this->link_category_model->find_all();
        $this->load->view($this->view_path('edit'), $data);
    }

    public function create() {
        $link = $this->_form_data();
        $this->link_model->insert($link);

        redirect($this->go_index());
    }

    public function update($id) {
        $link = $this->_form_data();
        $this->link_model->update($link, array('id' => $id));
        redirect($this->go_index());
    }

    public function delete($id) {
        $this->link_model->delete($id);
        redirect($this->go_index());
    }

    private function _form_data() {
        return array(
            'title'       => $this->input->post('title'),
            'url'         => $this->input->post('url'),
            'cate_id'     => $this->input->post('cate_id'),
            'description' => $this->input->post('description'),
            'language'    => 'cn'
        );
    }
}