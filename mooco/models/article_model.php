<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_model extends MK_Model {
    public function __construct() {
        parent::__construct();
        $this->load->model('article_category_model');
    }

    public function find_all_with_child_by_category($category_id) {
        $ac_ids = array();
        $ac_ids[] = $category_id;

        $acs = $this->article_category_model->find_all_by(array('parent_id' => $category_id));
        foreach ($acs as $ac) {
            $ac_ids[] = $ac->id;
        }

        $this->db->order_by('publish_time desc');
        $this->db->where_in('category_id', $ac_ids);
        return $this->converts($this->db->get($this->get_table_name())->result());
    }

    public function find_all_by_alias($params = array()) {
        $class_alias = array_remove($params, 'category.alias');
        $class = null;
        if ($class_alias != null) {
            $class = $this->article_category_model->find_by(array('alias' => $class_alias));
        }
        $articles = array();

        if ($class != null && isset($class->id)) {
            $articles = $this->find_all_with_child_by_category($class->id);
        }

        return $articles;

        // if ($class != null && isset($class->id)) {
        //     $params['category_id'] = $class->id;
        //     return parent::find_all_by($params, 'publish_time desc');
        // }
        // return array();
    }

    // private function get
}

class Article_obj extends MK_Object {
    public function get_category() {
        return $this->article_category_model->find_by_id($this->category_id);
    }

    public function fetch_images() {
        $pattern = '/<img .*?src=\"(.+?)\".*?>/';
        preg_match_all($pattern, $this->content, $matchs);
        $images = array();
        if (isset($matchs[1])) {
            foreach ($matchs[1] as $image) {
                $images[] = $image;
            }
        }
        return $images;
    }

    public function fetch_image($idx = 0) {
        $images = $this->fetch_images();
        if (isset($images[$idx])) {
            return $images[$idx];
        } else {
            return '/attached/image/default.jpg';
        }
        // return null;
    }
}