<?php /* Smarty version Smarty-3.1.13, created on 2013-06-06 16:23:08
         compiled from "oa_app/views/hr/staff_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158695236251b046ec13b8b6-28971659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4b9c4dcf126de3e7f62182921303e11d76346f2' => 
    array (
      0 => 'oa_app/views/hr/staff_edit.tpl',
      1 => 1370506799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158695236251b046ec13b8b6-28971659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'education' => 0,
    'element' => 0,
    'departments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b046ec1f2fd5_27628231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b046ec1f2fd5_27628231')) {function content_51b046ec1f2fd5_27628231($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="warp">
<?php echo $_smarty_tpl->getSubTemplate ("public/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="box">
    <form id="staff_form" method="post" action="<?php echo site_url(array('u'=>'hr/staff_save'),$_smarty_tpl);?>
">
        <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['uid'];?>
" />
    <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="title">
            <p><span class="power">
            <?php echo $_smarty_tpl->getSubTemplate ("public/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </span>
                <input id="main-submit" type="button" value="保存" class="save" />
            </p>
        </div>
        <div class="main">
            <div class="info">
                <div class="picture"><img src="<?php echo base_url(array('u'=>"inc/images/picture.jpg"),$_smarty_tpl);?>
" width="154" height="205" alt=""/><a href="#">修改头像</a></div>
                <div class="oneself">
                    <p>
                        <label for="truename">姓　　名：</label>
                        <input id="truename" name="truename" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['truename'];?>
" />
                    </p>
                    <p>
                        <label for="sex">性　　别：</label>
                        <select id="sex" name="sex" >
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['sex']==1){?> selected="selected" <?php }?>>男</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['sex']==0){?> selected="selected" <?php }?>>女</option>
                        </select>
                    </p>
                    <p>
                        <label for="age">年　　龄：</label>
                        <input id="age" name="age" type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['age'])===null||$tmp==='' ? '' : $tmp);?>
" />
                    </p>
                    <p>
                        <label for="birthday">生　　日：</label>
                        <input id="birthday" name="birthday" type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['birthday'])===null||$tmp==='' ? '' : $tmp);?>
"/>
                    </p>
                    <p>
                        <label for="educational_background">学　　历：</label>
                        <select name = "educational_background" id="educational_background">
                        <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['education']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['iteration']++;
?>
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration']==$_smarty_tpl->tpl_vars['user_data']->value['educational_background']){?>
                            <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['element']->value;?>
</option>
                            <?php }else{ ?>
                            <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration'];?>
"><?php echo $_smarty_tpl->tpl_vars['element']->value;?>
</option>
                            <?php }?>
                        <?php } ?>
                        </select>
                    </p>
                    <p>
                        <label for="specialty">专　　业：</label>
                        <input id="specialty" name="specialty" type="text" <?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['specialty'])===null||$tmp==='' ? '' : $tmp);?>
/>
                    </p>
                    <p>
                        <label for="is_married">婚姻状态：</label>
                        <select id="is_married" name="is_married">
                            <option vlaue="2" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_married']==2){?>selected="selected"<?php }?>>未婚</option>
                            <option vlaue="1" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_married']==1){?>selected="selected"<?php }?>>已婚</option>
                        </select>
                    </p>
                    <p>
                        <label for="phone">手机号码：</label>
                        <input id="phone" name="phone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['phone'];?>
"/>
                    </p>
                    <p>
                        <label for="idcard">身份证号：</label>
                        <input id="idcard" name="idcard" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['idcard'];?>
"/>
                    </p>
                        <span>
                        <label for="home_address">家庭住址：</label>
                        <input id="home_address" name="home_address" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['home_address'];?>
"/>
                        </span>
                </div>
                <div class="company">
                    <h2>公司相关</h2>
                    <p>
                        <label for="position">部　　门：</label>
                        <select id="position" name="position">
                            <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['departments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['position']==$_smarty_tpl->tpl_vars['element']->value['uid']){?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['element']->value['uid'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['element']->value['name'];?>
</option>
                                <?php }else{ ?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['element']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['element']->value['name'];?>
</option>
                                <?php }?>
                            <?php } ?>
                        </select>
                    </p>
                    <p>
                        <label for="sector">职　　务：</label>
                        <select id="sector" name="sector">
                            <option value="1">程序员</option>
                        </select>
                    </p>
                    <p>
                        <label for="join_time">入职时间：</label>
                        <input id="join_time" name="join_time" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['join_time'];?>
" />
                    </p>
                    <p>
                        <label for="work_age">工　　龄：</label>
                        <input id="work_age" name="work_age" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['work_age'];?>
"/>
                    </p>
                    <p>
                        <label for="provident_fund">公&nbsp;&nbsp;积&nbsp;&nbsp;金：</label>
                        <select id="provident_fund" name="provident_fund">
                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_married']==2){?>selected="selected"<?php }?>>未办理</option>
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_married']==1){?>selected="selected"<?php }?>>已办理</option>
                        </select>
                    </p>
                    <p>
                        <label for="contract">合同状态：</label>
                        <select id="contract" name="contract">
                            <option value="3" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_married']==3){?>selected="selected"<?php }?>>未签订</option>
                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_married']==2){?>selected="selected"<?php }?>>试用期</option>
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_married']==1){?>selected="selected"<?php }?>>已签订</option>
                        </select>
                    </p>
                    <p>
                        <label for="emergency_contact">紧急联系人：</label>
                        <input id="emergency_contact" name="emergency_contact" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['emergency_contact'];?>
"/>
                    </p>
                    <p>
                        <label for="emergency_contact_phone">紧急联系方式：</label>
                        <input id="emergency_contact_phone" name="emergency_contact_phone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['emergency_contact_phone'];?>
"/>
                    </p>
                        <span>
                        <label for="note">成长记录：</label>
                        <textarea id="note" name="note" cols="" rows=""><?php echo $_smarty_tpl->tpl_vars['user_data']->value['note'];?>
</textarea>
                        </span> </div>
                <div class="clear"></div>
            </div>
        </div>
        </form>
        <div class="bottom">
            <p>　　</p>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>