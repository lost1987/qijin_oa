<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Power extends CI_Controller {
    function __construct(){
        parent::__construct();
        is_login_redirect();
        load_library(array('jquery-ui'));
        add_js('inc/js/power.js');
        add_css('inc/css/style.css');
        $css_js = css_js_render();
        $meta = load_meta();
        $this->output_data = array_merge($this->output_data,$css_js,array('header_meta'=>$meta));
        $this->load->model('Model_power');
    }

    function role(){
        $this->output_data['role_list'] = $this->Model_power->role_list();
        $this->smarty_engine->display('power/role.tpl',$this->output_data);
    }

    function role_edit_submit(){
        $return = array('status'=>FALSE);
        $role = $this->input->post('role');
        if(empty($role)){
            echo json_encode($return);exit();
        }
        foreach($role as $key=>$value){
            $this->db->update('common_roles',$value,array('rid'=>$key));
        }
        $return['status'] = TRUE;
        echo json_encode($return);exit();
    }

    function role_add_submit(){
        $return = array('status'=>FALSE);
        $name = $this->input->post('name');
        if(empty($name)){
            return_ajax($return);
        }
        $this->db->insert('common_roles',array('name'=>$name));
        $insert_id = $this->db->insert_id();
        if($insert_id>0){
            $return['status'] = TRUE;
        }
        return_ajax($return);
    }

    function role_delete_submit($rid){
        $return = array('status'=>FALSE);
        if($rid>0){
            $return['status'] = TRUE;
            $this->db->delete('common_roles',array('rid'=>$rid));
        }
        return_ajax($return);
    }

    function permissions($role_id = 0){

        $this->output_data['current_role_id'] = $role_id;
        $this->output_data['page_title'] = page_title(get_page_title());
        $roles = $this->role->get_roles_permissions($role_id);

        $this->output_data['roles'] = $roles;
        $roles_permissions = $this->config->item('roles_permissions');
        $this->output_data['roles_permissions'] = $roles_permissions;

        $this->smarty_engine->display('power/permissions.tpl',$this->output_data);
    }

    function permissions_edit_submit($role_id = 0){
        $return = array('status'=>FALSE);
        $roles_permissions = $this->input->post('roles_permissions');

        if($role_id === 0 && !empty($roles_permissions)){
            $this->db->empty_table('common_role_permission');
        }else{
            $this->db->delete('common_role_permission',array('rid'=>$role_id));
        }
        if(!empty($roles_permissions)){
            foreach($roles_permissions as $key => $value){
                $rid = $key;
                foreach($value as $module => $permissions){
                    foreach($permissions as $permission=>$is_true){
                        $insert_data = array();
                        $insert_data['rid'] = $rid;
                        $insert_data['module'] = $module;
                        $insert_data['permission'] = $permission;
                        $this->db->insert('common_role_permission',$insert_data);
                    }
                }
            }
        }
        $return['status'] = TRUE;
        return_ajax($return);
    }
}