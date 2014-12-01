<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class MK_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
    }

    protected function view_path($path) {
        return $path;
    }
}

abstract class MKAdmin_Controller extends MK_Controller {
    function __construct() {
        parent::__construct();
        $this->layout = 'manage/layout/default';
    }

    protected function view_path($path) {
        return parent::view_path($this->_get_view_prefix() . $path);
    }

    private function _get_view_prefix() {
        $class_name = $this->inflector->pluralize(strtolower(get_class($this)));;
        return 'manage/' . $class_name . '/';
    }
}