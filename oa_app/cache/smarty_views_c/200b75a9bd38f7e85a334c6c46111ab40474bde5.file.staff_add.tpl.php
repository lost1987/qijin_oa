<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 09:57:56
         compiled from "oa_app/views/hr/staff_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4550625751abf82465a397-07521382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '200b75a9bd38f7e85a334c6c46111ab40474bde5' => 
    array (
      0 => 'oa_app/views/hr/staff_add.tpl',
      1 => 1369029270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4550625751abf82465a397-07521382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'educational_background_select' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51abf824677df9_74862052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51abf824677df9_74862052')) {function content_51abf824677df9_74862052($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
            <div class="info">
                <div class="picture"><img src="<?php echo base_url(array('u'=>"inc/images/picture.jpg"),$_smarty_tpl);?>
" width="154" height="205" alt=""/><a href="#">修改头像</a></div>
                <div class="oneself">
                    <p>
                        <label for="truename">姓　　名：</label>
                        <input id="truename" name="truename" type="text" />
                    </p>
                    <p>
                        <label for="sex">性　　别：</label>
                        <select id="sex" name="sex" >
                            <option>男</option>
                            <option>女</option>
                        </select>
                    </p>
                    <p>
                        <label for="age">年　　龄：</label>
                        <input id="age" name="age" type="text" />
                    </p>
                    <p>
                        <label for="birthday">生　　日：</label>
                        <input id="birthday" name="birthday" type="text" />
                    </p>
                    <p>
                        <label for="educational_background">学　　历：</label>
                        <?php echo $_smarty_tpl->tpl_vars['educational_background_select']->value;?>

                    </p>
                    <p>
                        <label for="specialty">专　　业：</label>
                        <input id="specialty" name="specialty" type="text" />
                    </p>
                    <p>
                        <label for="is_married">婚姻状态：</label>
                        <select id="is_married" name="is_married">
                            <option vlaue="2">未婚</option>
                            <option vlaue="1">已婚</option>
                        </select>
                    </p>
                    <p>
                        <label for="phone">手机号码：</label>
                        <input id="phone" name="phone" type="text" />
                    </p>
                    <p>
                        <label for="idcard">身份证号：</label>
                        <input id="idcard" name="idcard" type="text" />
                    </p>
                        <span>
                        <label for="home_address">家庭住址：</label>
                        <input id="home_address" name="home_address" type="text" />
                        </span>
                </div>
                <div class="company">
                    <h2>公司相关</h2>
                    <p>
                        <label for="position">部　　门：</label>
                        <select id="position" name="position">
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
                        <input id="join_time" name="join_time" type="text" />
                    </p>
                    <p>
                        <label for="work_age">工　　龄：</label>
                        <input id="work_age" name="work_age" type="text" />
                    </p>
                    <p>
                        <label for="provident_fund">公&nbsp;&nbsp;积&nbsp;&nbsp;金：</label>
                        <select id="provident_fund" name="provident_fund">
                            <option value="2">未办理</option>
                            <option value="1">已办理</option>
                        </select>
                    </p>
                    <p>
                        <label for="contract">合同状态：</label>
                        <select id="contract" name="contract">
                            <option value="3">未签订</option>
                            <option value="2">试用期</option>
                            <option value="1">已签订</option>
                        </select>
                    </p>
                    <p>
                        <label for="emergency_contact">紧急联系人：</label>
                        <input id="emergency_contact" name="emergency_contact" type="text" />
                    </p>
                    <p>
                        <label for="emergency_contact_phone">紧急联系方式：</label>
                        <input id="emergency_contact_phone" name="emergency_contact_phone" type="text" />
                    </p>
                        <span>
                        <label for="note">成长记录：</label>
                        <textarea id="note" name="note" cols="" rows=""></textarea>
                        </span> </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="bottom">
            <p>　　</p>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>