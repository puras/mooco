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

if (!function_exists('text')) {
    function text($text) {
        return strip_tags($text, '');
    }
}

if (!function_exists('truncate')) {
    function truncate($text, $length = 20) {
        $text = text($text);
        $text = preg_replace("{\t}", "", $text);
        $text = preg_replace("{\r\n}", "", $text);
        $text = preg_replace("{\r}", "", $text);
        $text = preg_replace("{\n}", "", $text);
        $text = preg_replace("{ }", "", $text);
        return mb_substr($text, 0, $length, 'UTF-8') . (utf8_strlen($text) > $length ? '...' : '');
    }
}

/* End of file mk_page_helper.php */
/* Location: ./application/herpers/mk_page_helper.php */