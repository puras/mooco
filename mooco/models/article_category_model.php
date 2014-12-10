<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_category_model extends MK_Model {
    public function __construct() {
        parent::__construct();
    }
}

class Article_category_obj extends MK_Object {
    public function get_parent() {
        return parent::find_by_id($this->parent_id);
    }
    public function get_children() {
        return $this->get_children_by_id($this->id);
    }

    public function get_brothers() {
        return $this->get_children_by_id($this->parent_id);
    }

    private function get_children_by_id($id) {
        $article_categories = array();
        $order = 'order asc, id asc';
        $params = array('parent_id' => $id);
        $article_categories = parent::find_all_by($params, $order);
        return $article_categories;
    }
}