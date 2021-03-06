<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends MK_Model {
    public function __construct() {
        parent::__construct();
        $this->load->model('page_category_model');
    }
}

class Page_obj extends MK_Object {
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

    public function get_parent() {
        return $this->page_category_model->find_by($this->category_id);
    }
}