<?php /* Smarty version Smarty-3.1.13, created on 2013-06-06 09:26:33
         compiled from "oa_app/views/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171755695651afe549e96272-88530595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '095b007d3b0236525375112dd8c4466b048b667b' => 
    array (
      0 => 'oa_app/views/login.tpl',
      1 => 1370321165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171755695651afe549e96272-88530595',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51afe54a077c61_05505763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51afe54a077c61_05505763')) {function content_51afe54a077c61_05505763($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="login">
    <div class="logo"></div>
    <div class="main">
        <div class="top">
            <div class="beta"></div>
            <form id="login-form" action="<?php echo site_url(array('url'=>"login/submit/"),$_smarty_tpl);?>
" method="post">
                <em><input id="username" name="username" type="text" onfocus="if(this.value =='用户名')this.value='';" onblur="if(this.value =='') this.value='用户名';" value="用户名" class="txt" /></em>
                <em><input id="password" name="password" type="password" onfocus="if(this.value =='******')this.value='';" onblur="if(this.value =='') this.value='******';" value="******" class="txt" /></em>
                <span><input type="submit" value="登 录" /></span>
            </form>
            <p><a href="#" target="_blank">忘记密码？</a></p>
        </div>
        <div class="bottom"></div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/login_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>