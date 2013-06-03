<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 16:14:53
         compiled from "oa_app/views/public/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197339759451ac507d007b19-82108738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db2096092a4466cc9fad82568ab7c1c7f86e6d23' => 
    array (
      0 => 'oa_app/views/public/footer.tpl',
      1 => 1369029270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197339759451ac507d007b19-82108738',
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
  'unifunc' => 'content_51ac507d01b3d8_98510311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac507d01b3d8_98510311')) {function content_51ac507d01b3d8_98510311($_smarty_tpl) {?><div class="footer">Copyright © 2013 <a href="http://www.qijinsoft.com/" target="_blank" title="齐进网络">齐进网络</a> All rights reserved.</div>
</div>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['footer_javascript']->value)===null||$tmp==='' ? '' : $tmp);?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['synlogin']->value)===null||$tmp==='' ? '' : $tmp);?>

    </body>
</html>
<!-- 页面执行时间：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['elapsed_time']->value)===null||$tmp==='' ? '' : $tmp);?>
 -->
<!-- 耗费服务器内存：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['memory_usage']->value)===null||$tmp==='' ? '' : $tmp);?>
 --><?php }} ?>