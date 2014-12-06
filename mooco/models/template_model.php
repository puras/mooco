<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template_model extends MK_Model {
    public function __construct() {
        parent::__construct();
        $this->load->helper('directory');
    }

    public function find_all() {
        $dmap = directory_map('./mooco/views/themes', 2);
        $templates = array();
        foreach($dmap as $name => $value) {
            if (is_array($value)) {
                $file_name = APPPATH . 'views/themes/' . $name . '/template_info.php';

                if (file_exists($file_name)) {
                    require_once($file_name);
                    $template = $template_info;
                    $template->name = $name;
                    $templates[] = $template;
                }
            }
        }
        return $templates;
    }
}