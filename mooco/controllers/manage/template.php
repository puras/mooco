<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends Admin_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array();
        $this->load->view($this->view_path('index'), $data);
    }

    public function show($id) {
        $data['usergroup'] = $this->usergroup_model->find_by_id($id);
        $this->load->view($this->view_path('show'));
    }

    public function new_form() {
        $data['usergroup'] = new stdClass();
        $this->load->view($this->view_path('new'), $data);
    }

    public function edit($id) {
        $data['usergroup'] = $this->usergroup_model->find_by_id($id);
        $this->load->view($this->view_path('edit'), $data);
    }

    public function create() {
        $usergroup = $this->_form_data();
        $this->usergroup_model->insert($usergroup);

        redirect($this->go_index());
    }

    public function update($id) {
        $usergroup = $this->_form_data();
        $this->usergroup_model->update($usergroup, array('id' => $id));
        redirect($this->go_index());
    }

    public function delete($id) {
        $this->usergroup_model->delete($id);
        redirect($this->go_index());
    }

    private function _form_data() {
        return array(
            'name' => $this->input->post('name'),
            'type' => 'default'
        );
    }
}