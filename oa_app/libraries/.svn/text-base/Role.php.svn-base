<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 角色权限管理
 * @auther  cary <289872225@qq.com>
 * @date    2013.02.01 17:20
 * @version Version 1.0
 * @copyright Copyright (c) 2013,cary
 * @link    http://sun190.com
 * @since		Version 1.0
 */
class Role{
    private $db;
    private $CI;
    function __construct(){
        $this->CI = &get_instance();
        $this->db = &$this->CI->db;
    }

    function get_roles($role_id = 0){
        if($role_id > 0){
            $this->db->where('rid',$role_id);
        }
        $this->db->select('rid,name')->from('common_roles')->order_by('sorting ASC');
        $query = $this->db->get();
        $data = $query->result_array();
        if(!empty($data)){
            return $data;
        }else{
            return FALSE;
        }
    }

    function get_roles_permissions($role_id = 0){
        $roles_permissions = array();
        $roles = $this->get_roles($role_id);
        foreach($roles as $role){
            $permissions = $this->role_permission($role['rid']);
            $role['role_permission'] = $permissions ? $permissions : FALSE;
            $roles_permissions[] = $role;
        }
        return $roles_permissions;
    }

    function get_user_role_id($user_id){
        $this->db
            ->select('rid')
            ->from('common_users_roles')
            ->where('uid',$user_id);
        $query = $this->db->get();
        $data = $query->row_array();
        if(!empty($data) && isset($data['rid'])){
            return $data['rid'];
        }else{
            return FALSE;
        }
    }

    function role_permission($role_id){
        $this->db
            ->select('permission,module')
            ->from('common_role_permission')
            ->where('rid',$role_id);
        $query = $this->db->get();
        $data = $query->result_array();
        $role = array();
        if(!empty($data) && is_array($data)){
            foreach($data as $value){
                    $role[$value['module']][] = $value['permission'];
            }
            return $role;
        }else{
            return FALSE;
        }
    }

    function get_module_permission($module_name,$mixed){
        if(!is_array($mixed) && is_numeric($mixed)){
            $this->db
                ->select('permission,module')
                ->from('common_role_permission')
                ->where(array('rid'=>$mixed,'module'=>$module_name));
            $query = $this->db->get();
            $data = $query->result_array();
            $module_role = array();
            if(!empty($data) && is_array($data)){
                foreach($data as $value){
                    $module_role[] = $value['permission'];
                }
                return $module_role;
            }else{
                return FALSE;
            }
        }else{
            if(isset($mixed[$module_name])){
                return $mixed[$module_name];
            }else{
                return FALSE;
            }
        }

    }
}
