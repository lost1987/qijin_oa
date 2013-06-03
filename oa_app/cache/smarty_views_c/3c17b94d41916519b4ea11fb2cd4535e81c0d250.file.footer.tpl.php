<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 06:53:16
         compiled from "oa_app\views\public\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1314551ac3d5cdfdd86-78369373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c17b94d41916519b4ea11fb2cd4535e81c0d250' => 
    array (
      0 => 'oa_app\\views\\public\\footer.tpl',
      1 => 1370227567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1314551ac3d5cdfdd86-78369373',
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
  'unifunc' => 'content_51ac3d5cea62b4_91899449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac3d5cea62b4_91899449')) {function content_51ac3d5cea62b4_91899449($_smarty_tpl) {?><div class="footer">Copyright © 2013 <a href="http://www.qijinsoft.com/" target="_blank" title="齐进网络">齐进网络</a> All rights reserved.</div>
</div>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['footer_javascript']->value)===null||$tmp==='' ? '' : $tmp);?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['synlogin']->value)===null||$tmp==='' ? '' : $tmp);?>

    </body>
</html>
<!-- 页面执行时间：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['elapsed_time']->value)===null||$tmp==='' ? '' : $tmp);?>
 -->
<!-- 耗费服务器内存：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['memory_usage']->value)===null||$tmp==='' ? '' : $tmp);?>
 --><?php }} ?>