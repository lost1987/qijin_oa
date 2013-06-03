<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 06:08:06
         compiled from "oa_app\views\hr\staff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2227651ac32c60cdd70-31309044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93990882d7c848a333582c0a044d60afe5b14215' => 
    array (
      0 => 'oa_app\\views\\hr\\staff.tpl',
      1 => 1370227567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2227651ac32c60cdd70-31309044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_list' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ac32c63bea15_19293723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac32c63bea15_19293723')) {function content_51ac32c63bea15_19293723($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="warp">
<?php echo $_smarty_tpl->getSubTemplate ("public/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="box">
    <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="title">
            <p><span class="power">
            <?php echo $_smarty_tpl->getSubTemplate ("public/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </span>
                <input onclick="location.href = '<?php echo site_url(array('u'=>"hr/staff_add/"),$_smarty_tpl);?>
'" type="button" value="添加" class="add" />
            </p>
        </div>
        <div class="main">
            <div class="power">
                <?php if ($_smarty_tpl->tpl_vars['user_list']->value){?>
                <p><strong>姓名</strong><strong>操作</strong></p>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                        <li><span class="user"><?php echo $_smarty_tpl->tpl_vars['user']->value['truename'];?>
</span><em><a href="<?php echo site_url(array('u'=>("hr/staff_edit/").($_smarty_tpl->tpl_vars['user']->value['uid'])),$_smarty_tpl);?>
">修改</a></em><em><a href="<?php echo site_url(array('u'=>("hr/staff_delete/").($_smarty_tpl->tpl_vars['user']->value['uid'])),$_smarty_tpl);?>
">删除</a></em></li>
                    <?php } ?>
                    <div class="clear"></div>
                </ul>
                <?php }else{ ?>
                    暂无任何员工
                <?php }?>

            </div>
        </div>
        <div class="bottom">
            <p>　　</p>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>