<?php /* Smarty version Smarty-3.1.13, created on 2013-03-04 14:17:12
         compiled from "oa_app/views/public/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89888352251343c68313747-24617551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db382a537bb9148fe0593465fdf561f6f62ace15' => 
    array (
      0 => 'oa_app/views/public/header.tpl',
      1 => 1362130235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89888352251343c68313747-24617551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header_meta' => 0,
    'page_title' => 0,
    'css' => 0,
    'header_javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51343c68377762_59407444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51343c68377762_59407444')) {function content_51343c68377762_59407444($_smarty_tpl) {?><?php echo doctype(array('dtype'=>'xhtml1-trans'),$_smarty_tpl);?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $_smarty_tpl->tpl_vars['header_meta']->value;?>

<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['css']->value;?>

<?php echo $_smarty_tpl->tpl_vars['header_javascript']->value;?>

</head>
<body><?php }} ?>