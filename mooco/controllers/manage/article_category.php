<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_Category extends MKAdmin_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->model('article_cate_model');
    }

    public function index() {
    // $data['article_cates'] = $this->article_cate_model->find_all();
    // if ($this->is_ajax()) {
    //   echo json_encode($data); 
    //   exit;
    // }
        $data = array();
        $this->load->view($this->view_path('index'), $data);
    }

  // public function show($id) {
  //   $this->load->view($this->view_path('show'));
  // }

  // public function new_form() {
  //   $data['article_cates'] = $this->article_cate_model->find_all();
  //   $data['templates'] = $this->_get_part_templates();
  //   $data['article_cate'] = new stdClass();
  //   $this->load->view($this->v('new'), $data);
  // }

  // public function edit($id) {
  //   $data['article_cates'] = $this->article_cate_model->find_all();
  //   $data['templates'] = $this->_get_part_templates();
  //   $data['article_cate'] = $this->article_cate_model->find_by_id($id);
  //   $this->load->view($this->v('edit'), $data);
  // }

  // public function create() {
  //   $article_cate = $this->_form_data();
  //   $this->article_cate_model->insert($article_cate);

  //   redirect($this->get_index());
  // }

  // public function update($id) {
  //   $article_cate = $this->_form_data();
  //   $this->article_cate_model->update($article_cate, array('id' => $id));

  //   redirect($this->get_index());
  // }

  // public function delete($id) {
  //   $this->article_cate_model->delete($id);

  //   redirect($this->get_index());
  // }

  // private function _form_data() {
  //   return array(
  //     'title'         => $this->input->post('title'),
  //     'alias'         => $this->input->post('alias'),
  //     'parent_id'     => $this->input->post('parent_id'),
  //     'part_template' => $this->input->post('part_template'),
  //     'language'      => 'cn'
  //   );
  // }

  // private function _get_part_templates() {
  //   $article_view_folder = APPPATH . 'views/themes/' . $this->template . '/' . 'articles';
  //   $dir = dir($article_view_folder);
  //   $part_templates = array();
  //   while (false !== ($file = $dir->read())) {
  //     if (preg_match_all("/^(.*?)_index.php$/i", $file, $matchs)) {
  //       $part_templates[] = $matchs[1][0];
  //     }
  //   }
  //   return $part_templates;
  // }
}


/* End of file article_cates.php */
/* Location: ./application/controllers/admin/article_cates.php */