<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-6-3
 * Time: 上午11:28
 * To change this template use File | Settings | File Templates.
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Food extends CI_Controller{
    function __construct(){
        parent::__construct();
        is_login_redirect();
        load_library(array('jquery-ui','dialog'));
        add_js('inc/js/jQueryUI/zh_cn/datepicker.js');
//        add_js('inc/js/power.js');
        add_js('inc/js/food.js');
        add_js('inc/js/food_record.js');
        add_js('inc/js/food_menu.js');
        add_css('inc/css/style.css');
        $css_js = css_js_render();
        $meta = load_meta();
        $this->load->model('model_food');
        $this->output_data = array_merge($this->output_data,$css_js,array('header_meta'=>$meta));
//        $this->load->model('Model_user');
    }
    /*
   * 菜单大全
   */
    function food_menu(){
        $this->smarty_engine->display('food/food_menu.tpl',$this->output_data);
    }
    /*
   * 今日消费
   */
    function food_cost(){
        $this->smarty_engine->display('food/food_cost.tpl',$this->output_data);
    }
    /*
   * 菜单管理
   */
    function food_manage(){
        $this->smarty_engine->display('food/food_manage.tpl',$this->output_data);
    }
    /*
   * 添加菜单
   */
    function food_add(){
        $foodname=$_POST['foodname'];
        $foodprice=$_POST['foodprice'];
        $foodtype=$_POST['foodtype'];
        $this->uploaddir = '/upload/images/day_'.date('ymd').'/';
       // $config['upload_path']  = './upload/images/day_'.date('ymd').'/';
        $config['upload_path'] ='./upload/images/day_'.date('Ymd').'/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);
        @mkdir($config['upload_path'], 0777,true);

        if($this->upload->do_upload('userfile')){
            $data  = $this->upload->data();
            $filename= $this->uploaddir.$data['file_name'];

            $data=array('foodname'=>$foodname,'price'=>$foodprice,'imageurl'=>$filename,'priceid'=>$foodtype);
            $this->model_food->add_food($data);
            $this->smarty_engine->display('food/food_manage.tpl',$this->output_data);
        }
        $error = array('error' => $this->upload->display_errors());
        echo "{ success:false}";var_dump($error);echo   $config['upload_path'] ;
    }



    /*
   * 今日点餐
   */
    function food_today(){
        $this->smarty_engine->display('food/food_today.tpl',$this->output_data);
    }
    /*
   * 修改菜单
   */
    function  food_modify_window(){
        $window = $this->smarty_engine->render('food/food_modify_window.tpl');
        echo $window;
    }
    /*
    * 支付
    */
    function food_menu_window(){
        $window =$this->smarty_engine->render('food/food_menu_window.tpl');
        echo $window;
    }
    /*
    * 点餐合计
    */
    function food_total_window(){
        $window =$this->smarty_engine->render('food/food_total_window.tpl');
        echo $window;
    }
    /*
     * 历史记录
     */
    function food_order_record(){
        $window =$this->smarty_engine->render('food/food_order_record.tpl');
        echo $window;
    }

    /*
   * 文件上传
   */


}