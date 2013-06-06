<?php
class Model_my extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    public function add_user($data){
        if(is_array($data) && !empty($data)){
            $this->db->insert('common_users',$data);
            $insert_id = $this->db->insert_id();
            if($insert_id>0){
                $this->db->select('uid')->form('common_users_roles')->where(array('uid'=>$insert_id,'rid'=>1));
                $query = $this->db->get();
                $data = $query->row_array();
                if($data){
                    $this->db->insert('common_users_roles',array('uid'=>$insert_id,'rid'=>1));
                }
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
    }

    public function get_user(){

    }
}