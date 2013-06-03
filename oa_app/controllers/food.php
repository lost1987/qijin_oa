<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-6-3
 * Time: 上午11:28
 * To change this template use File | Settings | File Templates.
 */
class Food extends CI_Controller{
    function __construct(){
        parent::__construct();
        is_login_redirect();
        load_library(array('jquery-ui','dialog'));
//        add_js('inc/js/power.js');
        add_js('inc/js/food.js');
        add_css('inc/css/style.css');
        $css_js = css_js_render();
        $meta = load_meta();
        $this->output_data = array_merge($this->output_data,$css_js,array('header_meta'=>$meta));
//        $this->load->model('Model_user');
    }
    function food_menu(){
        $this->smarty_engine->display('food/food_menu.tpl',$this->output_data);
    }
    function food_cost(){
        $this->smarty_engine->display('food/food_cost.tpl',$this->output_data);
    }
    function food_manage(){
        $this->smarty_engine->display('food/food_manage.tpl',$this->output_data);
    }
    function food_today(){
        $this->smarty_engine->display('food/food_today.tpl',$this->output_data);
    }
    function  food_modify_window(){
        $window = $this->smarty_engine->render('food/food_modify_window.tpl');
        echo $window;
    }
}