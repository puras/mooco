<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('top_menus')) {
    function top_menus() {
        $ci =& get_instance();

        return $ci->menu_model->find_top_menus();
    }
}