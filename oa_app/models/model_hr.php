<?php
/**
 * Created by JetBrains PhpStorm.
 * User: cary
 * Date: 3/13/13
 * Time: 11:23 AM
 * To change this template use File | Settings | File Templates.
 */
class model_hr extends CI_Model{
    private $db;
    private $CI;
    function __construct(){
        $this->CI = &get_instance();
        $this->db = &$this->CI->db;
    }

    function user_data($user_uid){
        if($user_uid > 0){
            $this->db->where(array('deleted'=>0,'hidden'=>0,'uid'=>$user_uid));
            $this->db->from('common_users');
            $this->db->select('uid,uc_uid,truename,sex,birthday,position,idcard,phone,join_time,work_age,home_address,is_married,educational_background,specialty,emergency_contact,emergency_contact_phone,social_security,provident_fund,contract,note');
            $query = $this->db->get();
            $data = $query->row_array();
            if($data){
                return $this->user_data_info($data);
            }else{
                return FALSE;
            }
        }
        return FALSE;
    }

    function user_data_info($user_data){
        if(empty($user_data)){
            return FALSE;
        }
        if(empty($user_data['birthday'])){
            $user_data['age'] = '';
        }else{
            $user_data['age'] = date('Y')-date('Y',$user_data['birthday']);
        }
        //sector
        $user_data['sector'] = $this->user_sectors($user_data['uid']);
        return $user_data;
    }

    function user_list(){
        $this->db->select('uid,uc_uid,truename')->from('common_users')->where(array('deleted'=>0,'hidden'=>0));
        $query = $this->db->get();
        $data = $query->result_array();
        if(empty($data)){
            return FALSE;
        }else{
            return $data;
        }
    }

    function sector_list(){
        $this->db->select('uid,name,parent_category')->from('common_sector')->where(array('deleted'=>0,'hidden'=>0,'parent_category'=>0))->order_by('sorting ASC');
        $query = $this->db->get();
        $data = $query->result_array();
        if($data){
            $level = $data;
            foreach($level as $key=>$value){
                $this->db->select('uid,name,parent_category')->from('common_sector')->where(array('deleted'=>0,'hidden'=>0,'parent_category'=>$value['uid']))->order_by('sorting ASC');
                $children_query = $this->db->get();
                $children_data = $children_query->result_array();
                $level[$key]['children'] = $children_data;
            }
            return $level;
        }else{
            return FALSE;
        }
    }

    function nosector_user(){
        $this->db->select('GROUP_CONCAT(uid_foreign) as uids')->from('common_sector_mm');
        $query = $this->db->get();
        $data = $query->row_array();
        if($data){
            $this->db->where_not_in('uid',explode(',',$data['uids']));
        }
        $this->db->select('uid,truename')->from('common_users')->where(array('deleted'=>0,'hidden'=>0));
        $query = $this->db->get();
        $return = $query->result_array();
        if(empty($return)){
            return FALSE;
        }
        return $return;
    }

    function sector_and_user(){
        $return = array();
        $this->db->select('uid')->from('common_sector')->where(array('deleted'=>0,'hidden'=>0))->order_by('sorting ASC');
        $query = $this->db->get();
        $data = $query->result_array();
        if($data){
            foreach($data as $value){
                $user_uids = $this->get_user_by_sector($value['uid']);
                if($user_uids){
                    $this->db->select('uid,truename')->from('common_users')->where_in('uid',explode(',',$user_uids));
                    $query = $this->db->get();
                    $data = $query->result_array();
                    $return[$value['uid']] = $data;
                }else{
                    $return[$value['uid']] = array();
                }
            }
        }
        if(empty($return)){
            return FALSE;
        }
        return $return;
    }



    function get_user_by_sector($sector){
        if($sector>0){
            $this->db->select('GROUP_CONCAT(uid_foreign) as uids')->from('common_sector_mm')->where(array('uid_local'=>$sector));
            $query = $this->db->get();
            $data = $query->row_array();
            if($data){
                return $data['uids'];
            }else{
                return FALSE;
            }
        }
    }

    function user_sector($uid){
        if($uid>0){
            $this->db->select('uid_local,uid_foreign')->from('common_sector_mm')->where(array('uid_local'=>$uid,'tablename'=>'common_users'));
            $query = $this->db->get();
            $data = $query->row_array();
            if($data){
                return $data['uid_foreign'];
            }else{
                return FALSE;
            }
        }
    }

    function user_sectors($uid){
        $return = array();
        $current_sector_id = $this->user_sector($uid);
        if($current_sector_id>0){
            $this->db->select('uid,parent_category')->from('common_sector')->where(array('uid'=>$current_sector_id));
            $query = $this->db->get();
            $data = $query->row_array();
            if($data){
                if($data['parent_category'] != 0){
                    $return[] = $data['parent_category'];
                }
                $return[] = $current_sector_id;
            }
        }
        if(empty($return)){
            return FALSE;
        }else{
            return $return;
        }
    }

    function get_departments_all(){
        $return = array();
        $return = $this->db->select("uid,name")->get('common_sector')->result_array();
        return $return;
    }
}
