<?php
function menu($current_uri = NULL){
    $uri_string = $current_uri === NULL ? uri_string() : $current_uri;
    $menu = get_config_menu();
    foreach($menu as $key => &$value){
        $value['#current'] = FALSE;
        foreach($value['level1'] as $k => $v){
            $temp_uri = $key.'/'.$k;

            if($temp_uri === $uri_string){
                $value['#current'] = TRUE;
                $value['level1'][$k]['#current'] = TRUE;
            }
        }
    }
    return $menu;
}

function get_config_menu(){
    $CI = &get_instance();
    $menu = &common_static('menu',array());
    if(empty($menu)){
        $menu = $CI->config->item('menu');
    }
    return $menu;
}

function get_page_title($current_uri = NULL){
    $menu = get_config_menu();
    $uri_string = $current_uri === NULL ? uri_string() : $current_uri;
    $uri_title = &common_static('pages_title',array());
    if(empty($uri_title)){
        foreach($menu as $key => $value){
            $uri_title[$key] = $value['#title'];
            foreach($value['level1'] as $k => $v){
                $uri_title[$key.'/'.$k] = $v['#title'];
            }
        }
    }
    $current_title = isset($uri_title[$uri_string]) ? $uri_title[$uri_string] : FALSE;
    if(empty($current_title)){
        return FALSE;
    }
    return $current_title;
}

function breadcrumbs(){
    $uri_string = uri_string();
    if(empty($uri_string)){
        return array('首页');
    }
    $urlArray = array();
    $arrUrl = explode('/',$uri_string);
    $uri_title = &common_static('pages_title',array());
    foreach($arrUrl as $u){
        $temp_uri = isset($temp_uri) ? $temp_uri.'/'.$u : $u;
        if(isset($uri_title[$temp_uri])){
            $urlArray[] = $uri_title[$temp_uri];
        }
    }
    return $urlArray;
}