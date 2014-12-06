<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends Admin_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('page_model');
        $this->load->model('page_category_model');
    }

    public function index() {
        $data['pages'] = $this->page_model->find_all();
        if ($this->is_ajax()) {
            echo json_encode($data);
            exit;
        }
        $this->load->view($this->view_path('index'), $data);
    }

    public function show($id) {
        $data['page'] = $this->page_model->find_by_id($id);
        $this->load->view($this->view_path('show'));
    }

    public function new_form() {
        $data['page'] = new stdClass();
        $data['page_categories'] = $this->page_category_model->find_all();
        $data['part_templates'] = $this->_get_part_templates();
        $this->load->view($this->view_path('new'), $data);
    }

    public function edit($id) {
        $data['page'] = $this->page_model->find_by_id($id);
        $data['page_categories'] = $this->page_category_model->find_all();
        $data['part_templates'] = $this->_get_part_templates();
        $this->load->view($this->view_path('edit'), $data);
    }

    public function create() {
        $page = $this->_form_data();
        $page['created_at'] = Date('Y-m-d H:i:s');
        $this->page_model->insert($page);

        redirect($this->go_index());
    }

    public function update($id) {
        $page = $this->_form_data();
        $this->page_model->update($page, array('id' => $id));
        redirect($this->go_index());
    }

    public function delete($id) {
        $this->page_model->delete($id);
        redirect($this->go_index());
    }

    private function _form_data() {
        return array(
            'title'         => $this->input->post('title'),
            'alias'         => $this->input->post('alias'),
            'content'       => $this->input->post('content'),
            'part_template' => $this->input->post('part_template'),
            'category_id'   => $this->input->post('category_id'),
            'language'      => 'cn'
        );
    }

    private function _get_part_templates() {
        $article_view_folder = APPPATH . 'views/themes/' . $this->template . '/pages';
        $dir = dir($article_view_folder);
        $part_templates = array();
        while (false !== ($file = $dir->read())) {
            if (preg_match_all("/^(.*?)_show.php$/i", $file, $matchs)) {
                $part_templates[] = $matchs[1][0];
            }
        }
        return $part_templates;
    }
}