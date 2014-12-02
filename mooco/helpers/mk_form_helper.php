<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 为表单增加隐藏变量，标识为使用PUT方法提交
 */
if (!function_exists('form_put')) {  
  function form_put() {
    echo '<input type="hidden" id="_method" name="_method" value="PUT" />';
  }
}

/**
 * 为表单增加隐藏变量，标识为使用DELETE方法提交
 */
if (!function_exists('form_del')) {
  function form_del() {
    echo '<input type="hidden" id="_method" name="_method" value="DELETE" />';
  }
}

if (!function_exists('text_tag')) {
    function text_tag($obj, $col, $params = array()) {
        $str = '<input type="text" id="' . $col . '" name="' . $col . '" ';
        if (isset($obj) && isset($obj->$col)) $str .= 'value="' . $obj->$col . '" ';
        foreach($params as $key => $val) {
            $str .= $key . '="' . $val . '" ';
        }
        $str .= '>';
        echo $str;
    }
}

if (!function_exists('text_area_tag')) {
    function text_area_tag($obj, $col, $params = array()) {
        $str = '<textarea id="' . $col . '" name="' . $col . '"';
        foreach($params as $key => $val) {
            $str .= ' ' . $key . '="' . $val . '"';
        }
        $str .= '>';    
        if (isset($obj) && isset($obj->$col)) $str .= $obj->$col;
        $str .= '</textarea>';
        echo $str;
    }
}

if (!function_exists('select_tag')) {
    function select_tag($obj, $col, 
        $collection = array('list' => array(), 'key' => 'id', 'val' => 'name'), 
        $default = array('key' => '', 'val' => '请选择'), $params = array()) {
  
        $str = '<select id="' . $col . '" name="' . $col . '"';
        foreach($params as $pkey => $pval) {
            $str .= ' ' . $pkey . '="' . $pval . '"';
        }
        $str .= '>';

        if ($default !== false) $str .= '<option value="' . $default['key'] . '">' . $default['val'] . '</option>';

        if (isset($collection['list']) && sizeof($collection['list']) > 0) {
            // 判断对象及属性是否存在，存在时则需要去判断是否需要默认选中
            $flag = isset($obj) && isset($obj->$col); 
            foreach($collection['list'] as $item) {
                // 如果设置的列表中是数组，则直接读取0为KEY，1为VAL
                // 否则按对象的方式读取
                if (is_array($item)) {
                    $key = $item[0];
                    $val = $item[1];
                } else {
                    $key = empty($collection['key']) ? $item : $item->$collection['key'];
                    $val = empty($collection['val']) ? $item : $item->$collection['val'];
                }   
                $str .= '<option value="' . $key . '"';
                if ($flag) $str .= ($obj->$col == $key) ? ' selected="selected"' : '';
                $str .= '>' . $val . '</option>';     
            }
        }

    $str .= '</select>';
    echo $str;
    }
}