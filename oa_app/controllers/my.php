<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My extends CI_Controller {

    function __construct(){
        parent::__construct();
        is_login_redirect();
        load_library(array('jquery-ui'));
        add_js('inc/js/util.js');
        add_css('inc/css/style.css');
//        $this->load->model('Model_user');
    }

    function info(){
        $this->smarty_engine->display('my/info.tpl',$this->output_data);
    }
}