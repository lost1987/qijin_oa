<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 06:08:11
         compiled from "oa_app\views\my\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2510351ac32cb788ca7-75960321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd952ee6cff01b30412fc13f10501afaf1e640a0' => 
    array (
      0 => 'oa_app\\views\\my\\info.tpl',
      1 => 1370227567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2510351ac32cb788ca7-75960321',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ac32cb912f22_43709119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac32cb912f22_43709119')) {function content_51ac32cb912f22_43709119($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="warp">
<?php echo $_smarty_tpl->getSubTemplate ("public/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="box">
    <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="title">
            <p><span class="power">
            <?php echo $_smarty_tpl->getSubTemplate ("public/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </span>
                <input name="" type="button" value="编辑" class="edit" />
                
            </p>
        </div>
        <div class="main">
            <div class="info">
                <div class="picture"><img src="<?php echo base_url(array('u'=>'inc/images/picture.jpg'),$_smarty_tpl);?>
" width="154" height="205" alt=""/></div>
                <div class="oneself">
                    <p>
                        <label>姓　　名：</label>
                        蔡东</p>
                    <p>
                        <label>性　　别：</label>
                        男</p>
                    <p>
                        <label>年　　龄：</label>
                        25</p>
                    <p>
                        <label>生　　日：</label>
                        9月29日</p>
                    <p>
                        <label>学　　历：</label>
                        大专</p>
                    <p>
                        <label>专　　业：</label>
                        电子商务</p>
                    <p>
                        <label>婚姻状态：</label>
                        未婚</p>
                    <p>
                        <label>联系方式：</label>
                        18502727227</p>
                    <p>
                        <label>身份证号：</label>
                        420821198808124058</p>
                    <span>
                    <label>家庭住址：</label>
                    未填写</span> </div>
                <div class="company">
                    <h2>公司相关</h2>
                    <p>
                        <label>部　　门：</label>
                        技术支持部</p>
                    <p>
                        <label>职　　务：</label>
                        网站前端</p>
                    <p>
                        <label>入职时间：</label>
                        2012年2月26日</p>
                    <p>
                        <label>工　　龄：</label>
                        1年</p>
                    <p>
                        <label>公&nbsp;&nbsp;积&nbsp;&nbsp;金：</label>
                        无</p>
                    <p>
                        <label>合同状态：</label>
                        电子商务</p>
                    <p>
                        <label>紧急联系：</label>
                        爸爸</p>
                    <p>
                        <label>联系方式：</label>
                        18512345678</p>
                    <span>
                    <label>成长记录：</label>
                    未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写未填写</span> </div>
            </div>
        </div>
        <div class="bottom">
            <p>　　</p>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>