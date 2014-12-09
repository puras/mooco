<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends MK_Model {
    public function __construct() {
        parent::__construct();
    }

    public function find_top_menus() {
        $params = array(
            'menu_name' => 'main',
            'parent_id' => 0
        );
        $order = 'order asc, id asc';
        return $this->converts($this->find_all_by($params, $order));
    }
}

class MenuType {
    const LINK              = 'link';
    const PAGE              = 'page';
    const ARTICLE_CATEGORY  = 'article_category';
    const PAGE_CATEGORY     = 'page_category';
    const LINK_CATEGORY     = 'link_category';
    const GUEST_BOOK        = 'guest_book';
}

class Menu_obj extends MK_Object {
    public function get_href() {
        $href = '';

        if (MenuType::ARTICLE_CATEGORY == $this->type) {
            $href = base_url("/article/$this->key_id.html");
        } else if (MenuType::PAGE == $this->type) {
            $href = base_url("/page/show/$this->key_id.html");
        } else if (MenuType::LINK == $this->type) {
            $href = $this->relation->url;
        } else if (MenuType::GUEST_BOOK == $this->type) {
            $href = base_url('guest_book');
        }

        return $href;
    }

    public function get_relation() {
        $model_class = $this->type . '_model';
        return $this->$model_class->find_by_id($this->key_id);
    }

    public function get_items() {
        $params = array('parent_id' => $this->id);
        $order = 'order asc, id asc';
        return $this->converts($this->find_all_by($params, $order));
    }
}