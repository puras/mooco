<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('link_to')) {
    function link_to($url, $txt, $params = array(), $use_base = true) {
        $link = '<a href="' . ($use_base ? base_url($url) : $url) . '"';
        if (isset($params) && is_array($params) && sizeof($params) > 0) {
            foreach($params as $key => $val) {
                $link = $link . ' ' . $key . '="' . $val . '"'; 
            }
        }
        $link .= '>' . $txt . '</a>';
        echo $link;
    }
}

if (!function_exists('delete_to')) {
    function delete_to($url, $txt, $prompt = '确认删除?', $params = array(), $use_base = true) {
        $link = '<a href="' . ($use_base ? base_url($url) : $url) . '"';
        $link = $link . ' data-method="delete" data-confirm="' . $prompt . '"';
        if (isset($params) && is_array($params) && sizeof($params) > 0) {
            foreach($params as $key => $val) {
                $link = $link . ' ' . $key . '="' . $val . '"'; 
            }
        }
        $link .= '>' . $txt . '</a>';
        echo $link;
    }
}

/* End of file mk_page_helper.php */
/* Location: ./application/herpers/mk_page_helper.php */