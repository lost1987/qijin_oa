<?php
class Model_power extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    public function role_list(){
        $this->db->select('rid,name,sorting')->order_by('sorting ASC');
        $query = $this->db->get('common_roles');
        $data = $query->result_array();
        return $data;
    }
}