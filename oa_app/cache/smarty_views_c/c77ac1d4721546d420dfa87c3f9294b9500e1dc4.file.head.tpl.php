<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 03:13:56
         compiled from "oa_app\views\public\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:863951ac09f4520699-16369958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c77ac1d4721546d420dfa87c3f9294b9500e1dc4' => 
    array (
      0 => 'oa_app\\views\\public\\head.tpl',
      1 => 1370227567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '863951ac09f4520699-16369958',
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
  'unifunc' => 'content_51ac09f459dd86_31911688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac09f459dd86_31911688')) {function content_51ac09f459dd86_31911688($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $_smarty_tpl->tpl_vars['header_meta']->value;?>

<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['header_css']->value;?>

<?php echo $_smarty_tpl->tpl_vars['header_javascript']->value;?>

</head>
<body><?php }} ?>