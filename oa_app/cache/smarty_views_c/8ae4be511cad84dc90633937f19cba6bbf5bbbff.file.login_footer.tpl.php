<?php /* Smarty version Smarty-3.1.13, created on 2013-05-20 05:49:18
         compiled from "oa_app\views\public\login_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160025199b95e4a17d4-70210288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ae4be511cad84dc90633937f19cba6bbf5bbbff' => 
    array (
      0 => 'oa_app\\views\\public\\login_footer.tpl',
      1 => 1362558526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160025199b95e4a17d4-70210288',
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
  'unifunc' => 'content_5199b95e52dd36_37398376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5199b95e52dd36_37398376')) {function content_5199b95e52dd36_37398376($_smarty_tpl) {?><div class="login_footer">Copyright © 2013 <a href="http://www.qijinsoft.com/" target="_blank" title="齐进网络">齐进网络</a> All rights reserved.</div>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['footer_javascript']->value)===null||$tmp==='' ? '' : $tmp);?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['synlogin']->value)===null||$tmp==='' ? '' : $tmp);?>

</body>
</html>
<!-- 页面执行时间：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['elapsed_time']->value)===null||$tmp==='' ? '' : $tmp);?>
 -->
<!-- 耗费服务器内存：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['memory_usage']->value)===null||$tmp==='' ? '' : $tmp);?>
 --><?php }} ?>