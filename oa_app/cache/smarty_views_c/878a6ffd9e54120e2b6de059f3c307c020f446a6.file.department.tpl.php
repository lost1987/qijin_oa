<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 06:08:02
         compiled from "oa_app\views\hr\department.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2974951ac32c2b07298-88347125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '878a6ffd9e54120e2b6de059f3c307c020f446a6' => 
    array (
      0 => 'oa_app\\views\\hr\\department.tpl',
      1 => 1370227567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2974951ac32c2b07298-88347125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sector_list' => 0,
    'sector' => 0,
    'sector_user' => 0,
    'v' => 0,
    'children_secrot' => 0,
    'nosector_user' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ac32c343d387_36379327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac32c343d387_36379327')) {function content_51ac32c343d387_36379327($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="warp">
    <?php echo $_smarty_tpl->getSubTemplate ("public/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="box">
        <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="title">
            <p><span class="power">
            <?php echo $_smarty_tpl->getSubTemplate ("public/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </span>
                <input id="main-save" type="button" value="添加" class="save" />
            </p>
        </div>
        <div class="main">
            <div class="department">
                <p><strong>名称</strong><strong>操作</strong></p>
                <form id="department_list_form" action="<?php echo site_url(array('u'=>"hr/department_edit_submit/"),$_smarty_tpl);?>
" enctype="application/x-www-form-urlencoded" method="post">
                <ul class="sector-list">
                    <?php  $_smarty_tpl->tpl_vars['sector'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sector']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sector_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sector']->key => $_smarty_tpl->tpl_vars['sector']->value){
$_smarty_tpl->tpl_vars['sector']->_loop = true;
?>
                    <li id="department_category_<?php echo $_smarty_tpl->tpl_vars['sector']->value['uid'];?>
">
                        <div>
                            <span><input class="edit_name hide" name="department[<?php echo $_smarty_tpl->tpl_vars['sector']->value['uid'];?>
][name]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['sector']->value['name'];?>
"/><a class="show_name"><?php echo $_smarty_tpl->tpl_vars['sector']->value['name'];?>
</a><b class="close">&nbsp;</b></span>
                            <em><a class="show_all" href="javascript:void(0);">显示全部</a></em>
                            <em><a class="edit" href="javascript:void(0);">编辑</a></em>
                            <em><a class="delete" href="<?php echo site_url(array('u'=>("hr/department_delete/").($_smarty_tpl->tpl_vars['sector']->value['uid'])),$_smarty_tpl);?>
">删除</a></em>
                        </div>
                        <div class="hide">
                            <input class="sector_uid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sector']->value['uid'];?>
" />
                            <dl class="staff_sortable">
                                <?php if (isset($_smarty_tpl->tpl_vars['sector_user']->value[$_smarty_tpl->tpl_vars['sector']->value['uid']])&&!empty($_smarty_tpl->tpl_vars['sector_user']->value[$_smarty_tpl->tpl_vars['sector']->value['uid']])){?>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sector_user']->value[$_smarty_tpl->tpl_vars['sector']->value['uid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                        <dt>
                                            <input class="user_sector" name="user_sector[<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
][sector]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sector']->value['uid'];?>
" />
                                            <?php echo $_smarty_tpl->tpl_vars['v']->value['truename'];?>

                                        </dt>
                                    <?php } ?>
                                <?php }else{ ?>
                                <dt class="default_department">暂无成员</dt>
                                <?php }?>
                            </dl>
                        </div>
                        <?php if (!empty($_smarty_tpl->tpl_vars['sector']->value['children'])){?>
                            <ul class="hide">
                                <?php  $_smarty_tpl->tpl_vars['children_secrot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['children_secrot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sector']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['children_secrot']->key => $_smarty_tpl->tpl_vars['children_secrot']->value){
$_smarty_tpl->tpl_vars['children_secrot']->_loop = true;
?>
                                <li id="department_category_<?php echo $_smarty_tpl->tpl_vars['children_secrot']->value['uid'];?>
">
                                    <div>
                                        <span><input class="edit_name hide" name="department[<?php echo $_smarty_tpl->tpl_vars['children_secrot']->value['uid'];?>
][name]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['children_secrot']->value['name'];?>
"/><a class="show_name"><?php echo $_smarty_tpl->tpl_vars['children_secrot']->value['name'];?>
</a><b class="close">&nbsp;</b></span>
                                        <em><a class="show_all" href="javascript:void(0);">显示全部</a></em>
                                        <em><a class="edit" href="javascript:void(0);">编辑</a></em>
                                        <em><a class="delete" href="<?php echo site_url(array('u'=>("hr/department_delete/").($_smarty_tpl->tpl_vars['children_secrot']->value['uid'])),$_smarty_tpl);?>
">删除</a></em>
                                    </div>
                                    <div class="hide">
                                        <input class="sector_uid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['children_secrot']->value['uid'];?>
" />
                                        <dl class="staff_sortable">
                                            <?php if (isset($_smarty_tpl->tpl_vars['sector_user']->value[$_smarty_tpl->tpl_vars['sector']->value['uid']])&&!empty($_smarty_tpl->tpl_vars['sector_user']->value[$_smarty_tpl->tpl_vars['sector']->value['uid']])){?>
                                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sector_user']->value[$_smarty_tpl->tpl_vars['sector']->value['uid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                                    <dt>
                                                        <input class="user_sector" name="user_sector[<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
][sector]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sector']->value['uid'];?>
" />
                                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['truename'];?>

                                                    </dt>
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <dt class="default_department">暂无成员</dt>
                                            <?php }?>
                                        </dl>
                                    </div>
                                 </li>
                                <?php } ?>
                            </ul>
                        <?php }?>
                    </li>
                    <?php } ?>
                    <div class="clear"></div>
                </ul>
                </form>
                <form id="department_form" action="<?php echo site_url(array('u'=>"hr/department_add/"),$_smarty_tpl);?>
" enctype="application/x-www-form-urlencoded" method="post">
                <p class="add">
                    <input name="name" type="text" class="txt validate[required]"/>
                    <input type="submit" value="添加部门" class="btn"/>
                </p>
                </form>
                <p class="unadd"><strong>未分配员工</strong></p>
                <ul>
                    <li>
                        <dl id="all_staff_sortable" class="unadd">
                            <?php if (!empty($_smarty_tpl->tpl_vars['nosector_user']->value)){?>
                                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nosector_user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                                    <dt>
                                        <input class="user_sector" name="user_sector[<?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
][sector]" type="hidden" value="0" />
                                        <?php echo $_smarty_tpl->tpl_vars['value']->value['truename'];?>

                                    </dt>
                                <?php } ?>
                            <?php }else{ ?>
                                <dt class="default_department">暂无员工</dt>
                            <?php }?>
                        </dl>
                    </li>
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
        <div class="bottom">
            <p>　　</p>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>