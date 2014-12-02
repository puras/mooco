<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class MK_Controller extends CI_Controller {
    public $template = 'default';

    function __construct() {
        parent::__construct();
    }

    public function is_post() {
        if (sizeof($_POST) == 0) return false;
        return true;
    }

    public function is_ajax() {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') return true;
        return false;
    }

    protected function view_path($path) {
        return $path;
    }

    protected function go_index($prefix) {
        return $prefix . strtolower(get_class($this));
    }
}

abstract class Admin_Controller extends MK_Controller {
    function __construct() {
        parent::__construct();
        $this->layout = 'manage/layout/default';

        $this->template = 'default';
    }

    protected function view_path($path) {
        return parent::view_path($this->_get_view_prefix() . $path);
    }

    protected function go_index() {
        return parent::go_index('/manage/');
    }

    private function _get_view_prefix() {
        $class_name = $this->inflector->pluralize(strtolower(get_class($this)));;
        return 'manage/' . $class_name . '/';
    }
}

abstract class Front_Controller extends MK_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('site_info_model');

        $site_info = $this->site_info_model->find_site_info();


        if (!empty($site_info->global_template)) {
            $this->template = $site_info->global_template;
            $this->layout = 'themes/' . $this->template . '/layout';
        }

        if ($site_info->is_close == 1) {
            echo $this->load->view($this->theme_view('close'), (array)$site_info, true);
            exit;
        }

        $this->load->vars(array('site_info' => $site_info));
    }

    protected function view_path($path) {
        return parent::view_path($this->_get_view_prefix() . $path);
    }

    protected function theme_view($path) {
        return 'themes/' . $this->template . '/' . $path;
    }

    private function _get_view_prefix() {
        $class_name = $this->inflector->pluralize(strtolower(get_class($this)));;
        return 'themes/' . $this->template . '/' . $class_name . '/';
    }
}
/* End of file MK_Controller.php */
/* Location: ./application/core/MK_Controller.php */