<?php
class Ucenter {
    public function __construct(){
        $this->CI =& get_instance();    //调用CI
        require_once (FCPATH.'/api/uc_config.php'); //载入UCenter 的 API
        $this->init();  //初始化
    }

    public function init(){
        if(UC_SYSCOOKIENAME != NULL){
            $this->cname = UC_SYSCOOKIENAME;
        }else{
            $this->cname = 'Example_auth';
        }
    }

    /**
     * 登陆验证
     * @param array $user
     * @return array
     */
    public function login($user = array('username'=>'','password'=>'')){
        $status = FALSE;
        $error_text = '';
        $return = array('status'=>$status,'error'=>'');
        list($uid, $username, $password, $email) = uc_user_login($user['username'], $user['password']);
        if($uid>0){

            $this->CI->session->set_userdata($this->cname,$this->info_encode($uid,$username));

            $synlogin = uc_user_synlogin($uid);

            $this->CI->session->set_userdata('synlogin',$synlogin);

            $this->CI->session->set_userdata('islogin',TRUE);

            $return['uid'] = $uid;
            $return['synlogin'] = $synlogin;
            $status = TRUE;
        } elseif($uid == -1) {
            $status = -1; //用户不存在,或者被删除
            $error_text = '用户不存在！';
        } elseif($uid == -2) {
            $status = -2;  //密码错
            $error_text = '密码错误！';
        }elseif($uid == -10){
            $status = -10; //用户未激活，请登陆您的游戏激活账户
            $error_text = '用户未激活，请登陆您的邮箱 '.$email.' 激活账户！';
        }else{
            $status = -3; //未定义
            $error_text = '未定义';
        }
        $return['status'] = $status;
        $return['error'] = $error_text;

        return $return;
    }

    /**
     * 登录信息加密
     * @param $uid
     * @param $username
     * @return string
     */
    private function info_encode($uid,$username){
        return uc_authcode($uid."\t".$username, 'ENCODE');
    }

    /**
     * 登录信息解密
     * @param $login_auth
     * @return array
     */
    private function info_decode($login_auth){
        $data = array();
        if($login_auth){
            $decode_auth = uc_authcode($login_auth,'DECODE');
            if($decode_auth){
                $data = explode("\t",$decode_auth);
            }
        }
        return $data;
    }

    function is_in_oa(){

    }
}