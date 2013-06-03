<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        load_library(array('fancybox','jquery-ui'));
        add_js('inc/js/login.js');
        add_css('inc/css/style.css');
        $css_js = css_js_render();
        $meta = load_meta();
        $this->output_data = array_merge($css_js,array('header_meta'=>$meta));
        $this->load->config('page_config/login_config');
        $page_title = $this->config->item('page_title');
        $this->output_data['page_title'] = page_title($page_title);
    }
	public function index(){
        $this->smarty_engine->debug = true;
        $this->smarty_engine->display('login.tpl',$this->output_data);
	}

    public function submit(){

        $return = array('status' => FALSE);
        $status = $this->ucenter->login(array('username'=>$this->input->post('username'),'password'=>$this->input->post('password')));
        if(isset($status['status'])){
            if($status['status'] === TRUE){
                $return['status'] = TRUE;
                $return['synlogin'] = $status['synlogin'];
            }
        }
        echo json_encode($return);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */