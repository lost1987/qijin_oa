<?php /* Smarty version Smarty-3.1.13, created on 2013-06-04 09:39:56
         compiled from "oa_app\views\power\role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1481751adb5ec8aaef6-95377266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '453c0533b427bedcf47ddca4a03a095137de6c48' => 
    array (
      0 => 'oa_app\\views\\power\\role.tpl',
      1 => 1370317787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1481751adb5ec8aaef6-95377266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role_list' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51adb5ecc03c66_61496349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51adb5ecc03c66_61496349')) {function content_51adb5ecc03c66_61496349($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                <p><strong>角色</strong><strong>操作</strong></p>
                <form id="role-main-form" method="post" action="<?php echo site_url(array('u'=>'power/role_edit_submit'),$_smarty_tpl);?>
" enctype="application/x-www-form-urlencoded">
                <ul class="sort-list">
                    <?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['role_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
                    <li>
                        <input type="hidden" name="role[<?php echo $_smarty_tpl->tpl_vars['role']->value['rid'];?>
][sorting]" value="<?php echo $_smarty_tpl->tpl_vars['role']->value['sorting'];?>
" >
                        <input type="hidden" class="role_rid" value="<?php echo $_smarty_tpl->tpl_vars['role']->value['rid'];?>
">
                        <input type="hidden" class="action_type" value="show">
                        <span>
                            <input class="edit_role_name hide" type="text" name="role[<?php echo $_smarty_tpl->tpl_vars['role']->value['rid'];?>
][name]" value="<?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
" />
                            <label class="show_text"><?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
</label>
                        </span>
                        <em><a class="edit" href="javascript:void(0);">编辑角色</a></em>
                        <em><a href="<?php echo site_url(array('u'=>('power/permissions/').($_smarty_tpl->tpl_vars['role']->value['rid'])),$_smarty_tpl);?>
">编辑权限</a></em>
                        <em><a class="delete" href="<?php echo site_url(array('u'=>('power/role_delete_submit/').($_smarty_tpl->tpl_vars['role']->value['rid'])),$_smarty_tpl);?>
">删除</a></em>
                    </li>
                    <?php } ?>
                    <div class="clear"></div>
                </ul>
                </form>
                <form id="role-form" action="<?php echo site_url(array('u'=>'power/role_add_submit'),$_smarty_tpl);?>
" method="post" enctype="application/x-www-form-urlencoded">
                <p class="add">
                        <input name="name" type="text" class="txt"/>
                        <input type="submit" value="添加角色" class="btn"/>
                </p>
                </form>
            </div>
        </div>
        <div class="bottom">
            <p>　　</p>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>