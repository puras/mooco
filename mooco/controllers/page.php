<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends Front_Controller {
    function __construct() {
        parent::__construct();
    }

    public function show($id) {
        $page = $this->page_model->find_by_id($id);

        $pages = null;
        if ($page->category_id != 0) {
            $category_id = $page->category_id;
            $pages = $this->page_model->find_all_by(array('category_id' => $category_id));
        }

        $data['page'] = $page;
        $data['pages'] = $pages;

        $this->_show_page($data);
    }

    private function _show_page($data) {
        $page = $data['page'];
        $tpl_show = 'show';
        $part_template = $page->part_template;
        if (!empty($part_template) &&
            file_exists(APPPATH . 'views/themes/' . $this->template . '/pages/' . $part_template . '_show.php')) {
            $tpl_show = $part_template . '_show';
        }

        $this->load->view($this->view_path($tpl_show), $data);
    }
}