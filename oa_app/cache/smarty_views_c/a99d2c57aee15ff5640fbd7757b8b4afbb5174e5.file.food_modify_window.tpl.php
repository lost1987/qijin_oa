<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 07:04:15
         compiled from "oa_app\views\food\food_modify_window.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2167351ac3fefbff081-14272281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a99d2c57aee15ff5640fbd7757b8b4afbb5174e5' => 
    array (
      0 => 'oa_app\\views\\food\\food_modify_window.tpl',
      1 => 1370242663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2167351ac3fefbff081-14272281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ac3fefc97cc1_25150265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac3fefc97cc1_25150265')) {function content_51ac3fefc97cc1_25150265($_smarty_tpl) {?><head>
    <meta charset="utf-8" />
</head>
<div class="food_managet_pop">
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