<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('mk_res')) {
    function mk_res($path = '/', $is_return = false) {
        global $application_folder;
        $url = base_url($application_folder . '/views/' . $path);
        if ($is_return) return $url;
        echo $url;
    }
}

if (!function_exists('asset_url')) {
    function asset_url($path = '/', $is_return = false) {
        $url = base_url('/assets/' . $path);
        if ($is_return) return $url;
        echo $url;
    }
}

if (!function_exists('theme_asset_url')) {
    function theme_asset_url($path = '/', $is_return = false) {
        global $application_folder;
        $theme_folder = '/views/themes/';
        $ci =& get_instance();

        $url = base_url($application_folder . $theme_folder . $ci->template) . '/assets/' . $path;
        if ($is_return) return $url;
        echo $url;
    }
}

/* End of file mk_url_helper.php */
/* Location: ./application/herpers/mk_url_helper.php */