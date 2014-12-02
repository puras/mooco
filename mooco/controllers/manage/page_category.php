<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_category extends Admin_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('page_category_model');
    }

    public function index() {
        $data['page_categories'] = $this->page_category_model->find_all();
    $this->load->view($this->view_path('index'), $data);
    }
    public function show() {
        $this->load->view($this->view_path('show'));
    }
    public function new_form() {
        $data['page_categories'] = $this->page_category_model->find_all();
        $data['templates'] = $this->_get_part_templates();
        $data['page_category'] = new stdClass();
        $this->load->view($this->view_path('new'), $data);
    }
    public function edit($id) {
        $data['page_categories'] = $this->page_category_model->find_all();
        $data['templates'] = $this->_get_part_templates();
        $data['page_category'] = $this->page_category_model->find_by_id($id);
        $this->load->view($this->view_path('edit'), $data);
    }
    public function create() {
        $page_cate = $this->_form_data();
        $this->page_category_model->insert($page_cate);

        redirect($this->go_index());
    }
    public function update($id) {
        $page_cate = $this->_form_data();
        $this->page_category_model->update($page_cate, array('id' => $id));

        redirect($this->go_index());
    }
    public function delete($id) {
        $this->page_category_model->delete($id);

        redirect($this->go_index());
    }

    private function _form_data() {
        return array(
            'title'         => $this->input->post('title'),
            'alias'         => $this->input->post('alias'),
            'parent_id'     => $this->input->post('parent_id'),
            'part_template' => $this->input->post('part_template')
        );
    }

    private function _get_part_templates() {
        $article_view_folder = APPPATH . 'views/themes/' . $this->template . '/pages';
        $dir = dir($article_view_folder);
        $part_templates = array();
        while (false !== ($file = $dir->read())) {
            if (preg_match_all("/^(.*?)_index.php$/i", $file, $matchs)) {
                $part_templates[] = $matchs[1][0];
            }
        }
        return $part_templates;
    }
}

/* End of file page_category.php */
/* Location: ./application/controllers/manage/page_category.php */