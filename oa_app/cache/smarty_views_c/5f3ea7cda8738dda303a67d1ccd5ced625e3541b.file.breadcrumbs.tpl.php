<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 16:59:22
         compiled from "oa_app/views/public/breadcrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74671400251ac5aeab0a8d9-16256907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f3ea7cda8738dda303a67d1ccd5ced625e3541b' => 
    array (
      0 => 'oa_app/views/public/breadcrumbs.tpl',
      1 => 1369029270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74671400251ac5aeab0a8d9-16256907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumbs' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ac5aeab1b337_29561598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac5aeab1b337_29561598')) {function content_51ac5aeab1b337_29561598($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->index++;
?>
    <?php if ($_smarty_tpl->tpl_vars['value']->index!=0){?>
    - <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

        <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

    <?php }?>
<?php } ?><?php }} ?>