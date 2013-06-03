<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 16:59:22
         compiled from "oa_app/views/public/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147889774551ac5aeaac3010-37577283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8187309dba8972a2fdb330b18b1a78d9027451f8' => 
    array (
      0 => 'oa_app/views/public/menu.tpl',
      1 => 1369029270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147889774551ac5aeaac3010-37577283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'value' => 0,
    'key' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ac5aeaafbd72_20696223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac5aeaafbd72_20696223')) {function content_51ac5aeaafbd72_20696223($_smarty_tpl) {?><div class="menu">
    <ul>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <li>
            <h2 <?php if ($_smarty_tpl->tpl_vars['value']->value['#current']){?> class="current" <?php }?> ><a href="javascript:void(0);" class="<?php echo $_smarty_tpl->tpl_vars['value']->value['#class'];?>
"><span  <?php if ($_smarty_tpl->tpl_vars['value']->value['#current']){?> class="plus" <?php }else{ ?> class="minus" <?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['#title'];?>
</span></a></h2>
            <p <?php if ($_smarty_tpl->tpl_vars['value']->value['#current']){?> class="display" <?php }?>>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['level1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <a href="<?php echo site_url(array('u'=>(($_smarty_tpl->tpl_vars['key']->value).('/')).($_smarty_tpl->tpl_vars['k']->value)),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['#current']){?> class="current" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['#title'];?>
</a>
                <?php } ?>
            </p>
        </li>
        <?php } ?>
    </ul>
    <div class="clear"></div>
</div><?php }} ?>