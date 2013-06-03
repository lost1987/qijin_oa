<?php /* Smarty version Smarty-3.1.13, created on 2013-05-20 05:49:18
         compiled from "oa_app\views\public\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96775199b95e41fe25-19884793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c77ac1d4721546d420dfa87c3f9294b9500e1dc4' => 
    array (
      0 => 'oa_app\\views\\public\\head.tpl',
      1 => 1362458586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96775199b95e41fe25-19884793',
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
  'unifunc' => 'content_5199b95e481684_08742348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5199b95e481684_08742348')) {function content_5199b95e481684_08742348($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $_smarty_tpl->tpl_vars['header_meta']->value;?>

<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['header_css']->value;?>

<?php echo $_smarty_tpl->tpl_vars['header_javascript']->value;?>

</head>
<body><?php }} ?>