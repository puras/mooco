<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends Admin_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('template_model');
        $this->load->model('site_info_model');
    }

    public function index() {
        $data['site_info'] = $this->site_info_model->find_site_info();
        $data['templates'] = $this->template_model->find_all();
        $this->load->view($this->view_path('index'), $data);
    }

    public function apply($template) {
        $site_info['global_template'] = $template;
        $this->site_info_model->update($site_info);

        redirect($this->go_index());
    }

    // public function show($id) {
    //     $data['usergroup'] = $this->usergroup_model->find_by_id($id);
    //     $this->load->view($this->view_path('show'));
    // }

    // public function new_form() {
    //     $data['usergroup'] = new stdClass();
    //     $this->load->view($this->view_path('new'), $data);
    // }

    // public function edit($id) {
    //     $data['usergroup'] = $this->usergroup_model->find_by_id($id);
    //     $this->load->view($this->view_path('edit'), $data);
    // }

    // public function create() {
    //     $usergroup = $this->_form_data();
    //     $this->usergroup_model->insert($usergroup);

    //     redirect($this->go_index());
    // }

    // public function update($id) {
    //     $usergroup = $this->_form_data();
    //     $this->usergroup_model->update($usergroup, array('id' => $id));
    //     redirect($this->go_index());
    // }

    // public function delete($id) {
    //     $this->usergroup_model->delete($id);
    //     redirect($this->go_index());
    // }

    // private function _form_data() {
    //     return array(
    //         'name' => $this->input->post('name'),
    //         'type' => 'default'
    //     );
    // }
}