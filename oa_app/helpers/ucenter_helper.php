<?php
function is_login(){
    $CI = &get_instance();
    $is = $CI->session->userdata('islogin');
    if(!empty($is)){
        return TRUE;
    }else{
        return FALSE;
    }
}

function is_login_redirect(){
    if(is_login() === FALSE){
        redirect(site_url('login'));
    }
}
