<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends Admin_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
    }

    public function index() {
        $data['menus'] = $this->menu_model->find_all();
        $this->load->view($this->view_path('index'), $data);
    }

    public function show($id) {
        $data['menu'] = $this->menu_model->find_by_id($id);
        $this->load->view($this->view_path('show'), $data);
    }

    public function new_form() {
        $data['menus'] = $this->menu_model->find_all_by(array('parent_id' => 0));
        $data['menu'] = new stdClass();
        $data['types'] = array(
                array('link', '链接'),
                array('page', '单页'),
                array('article_category', '文章分类')
            );
        $data['targets'] = array(
                array('_self', '本窗口'),
                array('_blank', '新窗口'),
                array('_parent', '父窗口'),
                array('custom', '自定义')
            );
        $this->load->view($this->view_path('new'), $data);
    }

    public function edit($id) {
        $data['menus'] = $this->menu_model->find_all();
        $data['menu'] = $this->menu_model->find_by_id($id);
        $data['types'] = array(
                array('link', '链接'),
                array('page', '单页'),
                array('article_category', '文章分类')
            );
        $data['targets'] = array(
                array('_self', '本窗口'),
                array('_blank', '新窗口'),
                array('_parent', '父窗口'),
                array('custom', '自定义')
            );
        $this->load->view($this->view_path('edit'), $data);
    }

    public function create() {
        $menu = $this->_form_data();
        $this->menu_model->insert($menu);

        redirect($this->go_index());
    }

    public function update($id) {
        $menu = $this->_form_data();
        $this->menu_model->update($menu, array('id' => $id));

        redirect($this->go_index());
    }

    public function delete($id) {
        $this->menu_model->delete($id);

        redirect($this->go_index());
    }

    private function _form_data() {
        return array(
            'name'      => $this->input->post('name'),
            'type'      => $this->input->post('type'),
            'key_id'    => $this->input->post('key_id'),
            'target'    => $this->input->post('target'),
            'parent_id' => $this->input->post('parent_id')
        );
  }
}