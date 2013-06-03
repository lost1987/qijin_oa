<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 16:47:12
         compiled from "oa_app/views/food/food_modify_window.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128249538051ac5810601a82-36460156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e5e767bb8432fd2f2a211543576ea77670d306c' => 
    array (
      0 => 'oa_app/views/food/food_modify_window.tpl',
      1 => 1370249227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128249538051ac5810601a82-36460156',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ac5810608505_29913585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac5810608505_29913585')) {function content_51ac5810608505_29913585($_smarty_tpl) {?><div class="food_managet_pop">
    <p><em>修改菜品</em></p>
    <p><strong>菜名：</strong>
        <input name="" type="text" class="txt" />
        <strong>单价：</strong>
        <input name="" type="text" class="txt2" />
        元</p>
    <p><img src="inc/images/food.jpg" width="89" height="72" alt=""/></p>
    <p>
        <input name="" type="file" class="file" />
        <input name="" type="button" value="提交" class="btn"/>
    </p>
</div><?php }} ?>