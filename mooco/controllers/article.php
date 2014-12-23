<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends Front_Controller {
    function __construct() {
        parent::__construct();
    }

    public function index($category_id = null) {
        $article_category = null;
        if ($category_id != null) {
            $article_category = $this->article_category_model->find_by($category_id);
        }

        $this->_show_list($article_category);
    }

    public function show($id = null) {
        $id = isset($_GET['id']) ? $this->input->get('id') : $id;
        $article = $this->article_model->find_by_id($id);
        $article_category = $article->category;

        $tpl_show = 'show';
        $part_template = $article_category->part_template;

        if (!empty($part_template) &&
            file_exists(APPPATH . 'views/themes/' . $this->template . '/articles/' . $part_template . '_show.php')) {
            $tpl_show = $part_template . '_show';
        }
        if ($article_category->parent_id == 0) {
            $parent_category = $article_category;
            $article_categories = $article_category->children;
        } else {
            $parent_category = $article_category->parent;
            $article_categories = $article_category->brothers;
        }

        $data['article'] = $article;
        $data['parent_category'] = $parent_category;
        $data['article_categories'] = $article_categories;

        $this->load->view($this->view_path($tpl_show), $data);
    }

    private function _show_list($article_category) {
        $tpl_index = 'index';
        $part_template = '';

        $articles = array();
        $article_categories = array();

        if ($article_category != null) {
            $part_template = $article_category->part_template;
            if (!empty($part_template) &&
                file_exists(APPPATH . 'views/themes/' . $this->template . '/articles/' . $part_template . '_index.php')) {
                $tpl_index = $part_template . '_index';
            }

            $articles = $this->article_model->find_all_by(array('category_id' => $article_category->id));

            if ($article_category->parent_id == 0) {
                $parent_category = $article_category;
                $article_categories = $article_category->children;
            } else {
                $parent_category = $article_category->parent;
                $article_categories = $article_category->brothers;
            }
        }

        $data['articles'] = $articles;
        $data['article_category'] = $article_category;
        $data['parent_category'] = $parent_category;
        $data['article_categories'] = $article_categories;

        $this->load->view($this->view_path($tpl_index), $data);
    }
}