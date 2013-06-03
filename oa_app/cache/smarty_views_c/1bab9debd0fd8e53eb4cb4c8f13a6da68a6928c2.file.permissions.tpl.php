<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 06:07:59
         compiled from "oa_app\views\power\permissions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139451ac32bfeb7a47-76245298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bab9debd0fd8e53eb4cb4c8f13a6da68a6928c2' => 
    array (
      0 => 'oa_app\\views\\power\\permissions.tpl',
      1 => 1370227567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139451ac32bfeb7a47-76245298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roles' => 0,
    'role' => 0,
    'current_role_id' => 0,
    'roles_permissions' => 0,
    'value' => 0,
    'model_settings' => 0,
    'model_permission' => 0,
    'key' => 0,
    'module_name' => 0,
    'model_key' => 0,
    'checked' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ac32c05db6b5_38604770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac32c05db6b5_38604770')) {function content_51ac32c05db6b5_38604770($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="warp">
<?php echo $_smarty_tpl->getSubTemplate ("public/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="box">
    <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="title">
            <p><span class="power">
            <?php echo $_smarty_tpl->getSubTemplate ("public/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </span>
                <input id="main-submit" type="button" value="保存" class="save" />
            </p>
        </div>
        <div class="main">
            <div class="power">
                <p>
                    <em>权限</em>
                    <?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
                    <span><?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
</span>
                    <?php } ?>
                </p>
                <form id="role-main-form" method="post" action="<?php echo site_url(array('u'=>('power/permissions_edit_submit/').($_smarty_tpl->tpl_vars['current_role_id']->value)),$_smarty_tpl);?>
" enctype="application/x-www-form-urlencoded">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['roles_permissions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                            
                            <?php  $_smarty_tpl->tpl_vars['model_settings'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['model_settings']->_loop = false;
 $_smarty_tpl->tpl_vars['module_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['model']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['model_settings']->key => $_smarty_tpl->tpl_vars['model_settings']->value){
$_smarty_tpl->tpl_vars['model_settings']->_loop = true;
 $_smarty_tpl->tpl_vars['module_name']->value = $_smarty_tpl->tpl_vars['model_settings']->key;
?>
                                <li><label><b><?php echo $_smarty_tpl->tpl_vars['model_settings']->value['name'];?>
</b></label></li>
                                <?php  $_smarty_tpl->tpl_vars['model_permission'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['model_permission']->_loop = false;
 $_smarty_tpl->tpl_vars['model_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['model_settings']->value['action']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['model_permission']->key => $_smarty_tpl->tpl_vars['model_permission']->value){
$_smarty_tpl->tpl_vars['model_permission']->_loop = true;
 $_smarty_tpl->tpl_vars['model_key']->value = $_smarty_tpl->tpl_vars['model_permission']->key;
?>

                                <li>
                                        <label>
                                            <?php echo $_smarty_tpl->tpl_vars['model_permission']->value['name'];?>

                                        <?php if (isset($_smarty_tpl->tpl_vars['model_permission']->value['description'])!=''){?>
                                        <em><?php echo $_smarty_tpl->tpl_vars['model_permission']->value['description'];?>
</em>
                                        <?php }?>
                                        </label>
                                        <?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_smarty_tpl->tpl_vars['role_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
 $_smarty_tpl->tpl_vars['role_key']->value = $_smarty_tpl->tpl_vars['role']->key;
?>
                                        <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable('', null, 0);?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['role']->value['role_permission'][(($_smarty_tpl->tpl_vars['key']->value).('/')).($_smarty_tpl->tpl_vars['module_name']->value)])&&in_array($_smarty_tpl->tpl_vars['model_key']->value,$_smarty_tpl->tpl_vars['role']->value['role_permission'][(($_smarty_tpl->tpl_vars['key']->value).('/')).($_smarty_tpl->tpl_vars['module_name']->value)])){?>
                                            <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable('checked="checked"', null, 0);?>
                                        <?php }?>
                                        <em><input name="roles_permissions[<?php echo $_smarty_tpl->tpl_vars['role']->value['rid'];?>
][<?php echo (($_smarty_tpl->tpl_vars['key']->value).('/')).($_smarty_tpl->tpl_vars['module_name']->value);?>
][<?php echo $_smarty_tpl->tpl_vars['model_key']->value;?>
]" type="checkbox" value="1" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 /></em>
                                        <?php } ?>
                                </li>
                                <?php } ?>

                            <?php } ?>
                        <?php } ?>
                        <div class="clear"></div>
                    </ul>
                </form>
            </div>
        </div>
        <div class="bottom">
            <p>　　</p>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>