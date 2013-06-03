<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 16:15:05
         compiled from "oa_app/views/public/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91409520451ac5089914e55-01514769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5051ae44820f85e8de9da472edec44504fc40d4' => 
    array (
      0 => 'oa_app/views/public/head.tpl',
      1 => 1369029270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91409520451ac5089914e55-01514769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header_meta' => 0,
    'page_title' => 0,
    'header_css' => 0,
    'header_javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ac5089921855_02867577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac5089921855_02867577')) {function content_51ac5089921855_02867577($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $_smarty_tpl->tpl_vars['header_meta']->value;?>

<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['header_css']->value;?>

<?php echo $_smarty_tpl->tpl_vars['header_javascript']->value;?>

</head>
<body><?php }} ?>