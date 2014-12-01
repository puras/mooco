<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MKYield {
    function do_yield() {
        global $OUT;

        $ci =& get_instance();
        $output = $ci->output->get_output();

        if (!isset($ci->layout)) $ci->layout = 'layout/default';
        if ($ci->layout !== FALSE) {
            if (!preg_match('/(.+).php$/', $ci->layout)) $ci->layout .= '.php';

            $layout = APPPATH . 'views/' . $ci->layout;
            if (file_exists($layout)) {
                $data = isset($ci->layout_data) ? $ci->layout_data : array();
                $data['yield'] = $output;
                $ci->load->vars($data);
                $output = $ci->load->file($layout, true);
            }
        }
        $OUT->_display($output);
    }
}


/* End of file mk_yield.php */
/* Location: ./application/hooks/my_yield.php */