<?php /* Smarty version Smarty-3.1.13, created on 2013-06-04 09:42:49
         compiled from "oa_app\views\public\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2766751adb699ed3db2-95086672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6922d38a0e67cbb95b992505e2491752b603771' => 
    array (
      0 => 'oa_app\\views\\public\\header.tpl',
      1 => 1370317787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2766751adb699ed3db2-95086672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uri_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51adb699f28258_14392542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51adb699f28258_14392542')) {function content_51adb699f28258_14392542($_smarty_tpl) {?><div class="header"> <span>上午好！成茜　2013年5月25日　星期五　16:17:23</span><a href="<?php echo site_url(array(),$_smarty_tpl);?>
" class="home">返回首页</a><a href="<?php echo site_url(array('u'=>$_smarty_tpl->tpl_vars['uri_string']->value),$_smarty_tpl);?>
" class="refresh">刷新</a><a href="<?php echo site_url(array('u'=>'logout'),$_smarty_tpl);?>
" class="exit">退出</a> </div><?php }} ?>