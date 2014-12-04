<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_info_model extends MK_Model {
    function __construct() {
        parent::__construct();
    }

    public function find_site_info() {
        $infos = $this->find_all();
        if (count($infos) > 0) {
            return $infos[0];
        }
    }

    public function update($site_info) {
        $old_site_info = $this->find_site_info();
        if ($old_site_info) {
            parent::update($site_info, array('id' => $old_site_info->id));
        }
    }

    protected function get_table_name() {
        return 'site_info';
    }
}