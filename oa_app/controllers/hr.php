<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class hr extends CI_Controller{
    function __construct(){
        parent::__construct();
        is_login_redirect();
        load_library(array('jquery-ui','fancybox','validation','sortable'));
        add_js('inc/js/hr.js');
        add_css('inc/css/style.css');
        $css_js = css_js_render();
        $meta = load_meta();
        $this->output_data = array_merge($this->output_data,$css_js,array('header_meta'=>$meta));
        $this->load->model('Model_hr');
    }

    function staff(){
        $this->output_data['user_list'] = $this->Model_hr->user_list();
        $this->smarty_engine->display('hr/staff.tpl',$this->output_data);
    }

    function staff_add(){
        $educational_background_select_varables = array(
            '#data' => $this->config->item('educational_background'),
            '#attributes' => array(
                'id' => 'educational_background',
                'name' => 'educational_background',
            ),
        );
        $this->output_data['educational_background_select'] = theme('select_tag',$educational_background_select_varables);
//        print_r($this->output_data['educational_background_select']);exit;
        $this->output_data['menu'] = menu('hr/staff');
        $this->smarty_engine->display('hr/staff_add.tpl',$this->output_data);
    }

    function staff_edit($user_uid){
        load_library(array('linkagesel'));
        $css_js = css_js_render();
        $this->output_data = array_merge($this->output_data,$css_js);
        $user_data = $this->Model_hr->user_data($user_uid);
        $this->output_data['user_data'] = $user_data;
        $educational_background_select_varables = array(
            '#data' => $this->config->item('educational_background'),
            '#attributes' => array(
                'id' => 'educational_background',
                'name' => 'educational_background',
            ),
            '#selected' => $user_data['educational_background'],
        );
        $this->output_data['educational_background_select'] = theme('select_tag',$educational_background_select_varables);

        $this->smarty_engine->display('hr/staff_edit.tpl',$this->output_data);
    }

    function department(){
        $this->output_data['sector_list'] = $this->Model_hr->sector_list();
        $this->output_data['sector_user'] = $this->Model_hr->sector_and_user();
//        print_r($this->output_data['sector_user']);exit;
        $this->output_data['nosector_user'] = $this->Model_hr->nosector_user();
        $this->smarty_engine->display('hr/department.tpl',$this->output_data);
    }

        function department_add(){
        $return = array('status'=>FALSE);
        $name = $this->input->post('name');
        if(empty($name)){
             return_ajax($return);
        }
        $this->db->select('uid')->from('common_sector')->where('name',$name);
        $query = $this->db->get();
        $data = $query->result_array();
        if($data){
            return_ajax($return);
        }
        $this->db->insert('common_sector',array('name'=>$name,'sorting'=>9999));
        if($this->db->insert_id()>0){
            $return['status'] = TRUE;
            return_ajax($return);
        }
        return_ajax($return);
    }

    function department_edit_submit(){

        $return = array('status'=>FALSE);
        $sector_list = $this->input->post('department_category');
        $sector_data = $this->input->post('department');
        $user_sector = $this->input->post('user_sector');
//        print_r($user_sector);exit;
        if(empty($sector_list)){
            return_ajax($return);
        }
        $i = 0;
//        print_r($sector_data);exit;
        foreach($sector_list as $sector_uid => $sector_parent_category){
            $update = array();
            if($sector_parent_category == 'null'){
                $sector_parent_category = 0;
            }
            $update['sorting'] = $i;
            $update['parent_category'] = $sector_parent_category;
            $update['name'] = $sector_data[$sector_uid]['name'];
//            print_r($update);
            $this->db->update('common_sector',$update,array('uid'=>$sector_uid));
            $i++;
        }
        if(!empty($user_sector)){
            $this->db->where('tablename','common_users');
            $this->db->delete('common_sector_mm');
            foreach($user_sector as $user_uid=>$value){
                $insert = array();
                $insert['uid_local'] = $value['sector'];
                $insert['uid_foreign'] = $user_uid;
                $insert['tablename'] = 'common_users';
                $this->db->insert('common_sector_mm',$insert);
            }
        }
        $return['status'] = TRUE;
        return_ajax($return);
    }

    function department_delete($sector_uid){
        $return = array('status'=>FALSE);
        if($sector_uid > 0){
            $this->db->or_where(array('parent_category'=>$sector_uid,'uid'=>$sector_uid));
            $this->db->update('common_sector',array('deleted'=>1));
            $this->db->delete('common_sector_mm',array('uid_local'=>$sector_uid));
            $return['status'] = TRUE;
        }
        return_ajax($return);
    }
}
