<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 16:59:22
         compiled from "oa_app/views/public/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112963699851ac5aeab00236-49054189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db382a537bb9148fe0593465fdf561f6f62ace15' => 
    array (
      0 => 'oa_app/views/public/header.tpl',
      1 => 1369029270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112963699851ac5aeab00236-49054189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uri_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ac5aeab08232_52744750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac5aeab08232_52744750')) {function content_51ac5aeab08232_52744750($_smarty_tpl) {?><div class="header"> <span>上午好！成茜　2013年5月25日　星期五　16:17:23</span><a href="<?php echo site_url(array(),$_smarty_tpl);?>
" class="home">返回首页</a><a href="<?php echo site_url(array('u'=>$_smarty_tpl->tpl_vars['uri_string']->value),$_smarty_tpl);?>
" class="refresh">刷新</a><a href="<?php echo site_url(array('u'=>'logout'),$_smarty_tpl);?>
" class="exit">退出</a> </div><?php }} ?>