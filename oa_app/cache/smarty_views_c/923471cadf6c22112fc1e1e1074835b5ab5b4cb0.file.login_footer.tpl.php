<?php /* Smarty version Smarty-3.1.13, created on 2013-06-06 09:26:34
         compiled from "oa_app/views/public/login_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130838382551afe54a0d0e55-29048376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '923471cadf6c22112fc1e1e1074835b5ab5b4cb0' => 
    array (
      0 => 'oa_app/views/public/login_footer.tpl',
      1 => 1370321165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130838382551afe54a0d0e55-29048376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footer_javascript' => 0,
    'synlogin' => 0,
    'elapsed_time' => 1,
    'memory_usage' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51afe54a1419d6_37306332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51afe54a1419d6_37306332')) {function content_51afe54a1419d6_37306332($_smarty_tpl) {?><div class="login_footer">Copyright © 2013 <a href="http://www.qijinsoft.com/" target="_blank" title="齐进网络">齐进网络</a> All rights reserved.</div>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['footer_javascript']->value)===null||$tmp==='' ? '' : $tmp);?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['synlogin']->value)===null||$tmp==='' ? '' : $tmp);?>

</body>
</html>
<!-- 页面执行时间：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['elapsed_time']->value)===null||$tmp==='' ? '' : $tmp);?>
 -->
<!-- 耗费服务器内存：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['memory_usage']->value)===null||$tmp==='' ? '' : $tmp);?>
 --><?php }} ?>