<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_seo_model extends MK_Model {
    public function __construct() {
        parent::__construct();
    }

    public function find_site_seo() {
        $seos = $this->find_all();
        if (count($seos) > 0) {
            return $seos[0];
        }
    }

    public function update($site_seo) {
        $old_site_seo = $this->find_site_seo();
        if ($old_site_seo) {
            parent::update($site_seo, array('id' => $old_site_seo->id));
        }
    }

    protected function get_table_name() {
        return 'site_seo';
    }
}