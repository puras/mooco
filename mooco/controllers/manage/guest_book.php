<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guest_book extends Admin_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('guest_book_model');
    }

    public function index() {
        $data = $this->guest_book_model->find_all();
        $this->load->view($this->view_path('index'), $data);
    }

    public function show($id) {
        $data['guest_book'] = $this->guest_book_model->find_by_id($id);
        $this->load->view($this->view_path('show'));
    }

    public function new_form() {
        $data['guest_book'] = new stdClass();
        $this->load->view($this->view_path('new'), $data);
    }

    public function edit($id) {
        $data['guest_book'] = $this->guest_book_model->find_by_id($id);
        $this->load->view($this->view_path('edit'), $data);
    }

    public function create() {
        $guest_book = $this->_form_data();
        $this->guest_book_model->insert($guest_book);

        redirect($this->go_index());
    }

    public function update($id) {
        $guest_book = $this->_form_data();
        $this->guest_book_model->update($guest_book, array('id' => $id));
        redirect($this->go_index());
    }

    public function delete($id) {
        $this->guest_book_model->delete($id);
        redirect($this->go_index());
    }

    private function _form_data() {
        return array(
            'title'     => $this->input->post('title'),
            'contacter' => $this->input->post('contacter'),
            'phone'     => $this->input->post('phone'),
            'mobile'    => $this->input->post('mobile'),
            'email'     => $this->input->post('email'),
            'content'   => $this->input->post('content')
        );
    }
}