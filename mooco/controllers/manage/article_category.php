<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_Category extends Admin_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('article_category_model');
    }

    public function index() {
        $data['article_categories'] = $this->article_category_model->find_all();
    // if ($this->is_ajax()) {
    //   echo json_encode($data); 
    //   exit;
    // }
        $this->load->view($this->view_path('index'), $data);
    }

  // public function show($id) {
  //   $this->load->view($this->view_path('show'));
  // }

    public function new_form() {
        $data['article_categories'] = $this->article_category_model->find_all();
        $data['templates'] = $this->_get_part_templates();
        $data['article_category'] = new stdClass();
        $this->load->view($this->view_path('new'), $data);
    }

    public function edit($id) {
        $data['article_categories'] = $this->article_category_model->find_all();
        $data['templates'] = $this->_get_part_templates();
        $data['article_category'] = $this->article_category_model->find_by_id($id);
        $this->load->view($this->view_path('edit'), $data);
    }

    public function create() {
        $article_cate = $this->_form_data();
        $this->article_category_model->insert($article_cate);

        redirect($this->go_index());
    }

    public function update($id) {
        $article_category = $this->_form_data();
        $this->article_category_model->update($article_category, array('id' => $id));

        redirect($this->go_index());
    }

    public function delete($id) {
        $this->article_category_model->delete($id);

        redirect($this->go_index());
    }

    private function _form_data() {
        return array(
            'title'         => $this->input->post('title'),
            'alias'         => $this->input->post('alias'),
            'parent_id'     => $this->input->post('parent_id'),
            'part_template' => $this->input->post('part_template'),
            'language'      => 'cn'
        );
    }

    private function _get_part_templates() {
        $article_view_folder = APPPATH . 'views/themes/' . $this->template . '/' . 'articles';
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


/* End of file article_cates.php */
/* Location: ./application/controllers/admin/article_cates.php */