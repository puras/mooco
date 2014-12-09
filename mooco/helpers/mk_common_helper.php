<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('array_remove')) {
    function array_remove(&$array, $key) {
        $arr = array();
        $value = null;
        foreach($array as $k => $v) {
            if ($k == $key) {
                $value = $v;
            } else {
                $arr[$k] = $v;
            }
        }
        $array = $arr;
        return $value;
    }
}

if (!function_exists('utf8_strlen')) {
    function utf8_strlen($str = null) {
        // 将字符串分解为单元
        preg_match_all('/./us', $str, $match);
        // 返回单元个数
        return count($match[0]);
    }
}