<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 15:31:11
         compiled from "oa_app/views/public/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72381747551ac463fc356f4-99419475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '656c78d0c18f3b76ded789dd6c076387af5556b5' => 
    array (
      0 => 'oa_app/views/public/sidebar.tpl',
      1 => 1369029270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72381747551ac463fc356f4-99419475',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ac463fc3acf7_23339687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac463fc3acf7_23339687')) {function content_51ac463fc3acf7_23339687($_smarty_tpl) {?><div class="sidebar">
    <div class="logo">
        <h1><a href="<?php echo site_url(array(),$_smarty_tpl);?>
" title="返回首页"><span class="hide">齐进网络</span></a></h1>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("public/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="shadow"></div>
</div><?php }} ?>