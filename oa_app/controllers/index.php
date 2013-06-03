<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct(){
        parent::__construct();
        is_login_redirect();
        load_library(array('jquery-ui','jquery-color','jcorp','fancybox'));
        add_css('inc/css/style.css');
        $css_js = css_js_render();
        $meta = load_meta();
        $this->output_data = array_merge($this->output_data,$css_js,array('header_meta'=>$meta));
        $this->output_data['page_title'] = page_title();
    }
	public function index()
    {
        redirect('power/role');
//        print_r($this->output_data);exit;
        $role_id = $this->role->get_user_role_id('1');
        $role = $this->role->role_permission($role_id);
        $module_role = $this->role->get_module_permission('user_center',$role);
//        $this->ucenter->login(array('username'=>"肖建刚",'password'=>123456));
//        print_r($module_role);exit;
        $this->smarty_engine->debug = true;
//        print_r($this->output_data);
        $this->smarty_engine->display('index.tpl',$this->output_data);
	}
}