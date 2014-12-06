<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends Admin_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('article_category_model');
        $this->load->model('article_model');
    }

    public function index() {
        $data['articles'] = $this->article_model->find_all('id asc');
        $this->load->view($this->view_path('index'), $data);
    }

    public function show($id) {
        $this->load->view($this->view_path('show'));
    }

    public function new_form() {
        $data['article_categories'] = $this->article_category_model->find_all();
        $data['article'] = new stdClass();
        $this->load->view($this->view_path('new'), $data);
    }

    public function edit($id) {
        $data['article_categories'] = $this->article_category_model->find_all();
        $data['article'] = $this->article_model->find_by_id($id);
        $this->load->view($this->view_path('edit'), $data);
    }

    public function create() {
        $article = $this->_form_data();
        $article['publish_time'] = Date('Y-m-d H:i:s');
        $article['creator_id'] = $this->session->userdata('mk_current_user')->id;
        $this->article_model->insert($article);

        redirect($this->go_index());
    }

    public function update($id) {
        $article = $this->_form_data();
        $this->article_model->update($article, array('id' => $id));

        redirect($this->go_index());
    }

    public function delete($id) {
        $this->article_model->delete($id);

        redirect($this->go_index());
    }

    private function _form_data() {
        return array(
            'title'       => $this->input->post('title'),
            'content'     => $this->input->post('content'),
            'from'        => $this->input->post('from'),
            'author'      => $this->input->post('author'),
            'click_count' => $this->input->post('click_count'),
            'category_id' => $this->input->post('category_id')
        );
    }
}