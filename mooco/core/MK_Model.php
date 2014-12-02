<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MK_Model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function find_by_id($id) {
        return $this->find_by($id);
    }

    public function find_all($order = 'id desc') {
        return $this->find_all_by(array(), $order);
    }

    public function find_by($params) {
        if (!is_array($params)) $params = array('id' => $params);
        return $this->convert($this->db->get_where($this->get_table_name(), $params)->row());
    }

    public function find_all_by($params, $order = 'id desc') {
        $this->db->order_by($order);
        if (!is_array($params)) $params = array('id' => $params);
        return $this->converts($this->db->get_where($this->get_table_name(), $params)->result());
    }

    public function insert($obj) {
        $this->db->insert($this->get_table_name(), $obj);
        $this->db->insert_id();
    }

    public function update($obj, $params) {
        if (!is_array($params)) $params = array('id' => $params);
        $this->db->update($this->get_table_name(), $obj, $params);
    }

    public function delete($params) {
        if (!is_array($params)) $params = array('id' => $params);
        $this->db->delete($this->get_table_name(), $params);
    }

    protected function convert($db_obj, $obj_class_name = null) {
        if ($obj_class_name == null) {
            $obj_class_name = $this->get_class_name() . '_obj';
        }
        if (!class_exists($obj_class_name, false)) return $db_obj;
        $obj = new $obj_class_name();
        foreach($db_obj as $key => $val) {
            $obj->$key = $val;
        }
        return $obj;
    }

    protected function converts($db_objs, $obj_class_name = null) {
        $obj_arr = array();
        foreach($db_objs as $db_obj) {
            $obj_arr[] = $this->convert($db_obj, $obj_class_name);
        }
        return $obj_arr;
    }

    protected function get_table_name() {
        $class_name = $this->get_class_name();
        return $this->inflector->pluralize(strtolower($class_name));
    }

    protected function get_class_name() {
        $class_name = get_class($this);
        $class_name_segs = explode('_', $class_name);
        array_pop($class_name_segs);
        return implode('_', $class_name_segs);
    }
}

class MK_Object extends MK_Model {
    public function __construct() {
        parent::__construct();
    }

    public function __get($property_name) {
        if (!isset($this->$property_name)) {
            $get_method = 'get_' . $property_name;

            if (method_exists($this, $get_method)) {
                $this->$property_name = $this->$get_method();
            } else {
                return parent::__get($property_name);
            }
        }

        return $this->$property_name;
    }
}
/* End of file MK_Model.php */
/* Location: ./application/core/MK_MOdel.php */