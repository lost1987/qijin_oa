<?php /* Smarty version Smarty-3.1.13, created on 2013-06-04 13:08:32
         compiled from "oa_app/views/food/food_cost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74023856051ad76506527d4-69253882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c29c1ee2555849feba26fd2d51de690600e8cdb0' => 
    array (
      0 => 'oa_app/views/food/food_cost.tpl',
      1 => 1370321165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74023856051ad76506527d4-69253882',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ad7650665d31_77994765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ad7650665d31_77994765')) {function content_51ad7650665d31_77994765($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="warp">
    <?php echo $_smarty_tpl->getSubTemplate ("public/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="box">
        <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="title">
            <p><span class="power">
            <?php echo $_smarty_tpl->getSubTemplate ("public/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </span></div>
        <div class="main">
            <form action="" method="get">
               <div class="food_cost">
              <div class="food_cost_tool"><b>查找姓名：</b><input name="" type="text" class="txt" /><input name="" type="submit" value="提交" class="btn"/></div>
              <p><span class="name">姓名</span><span class="date">日期</span><span class="money">金额</span><span class="pay">结算</span><span class="log">记录</span></p>
              <ul>
              <li><span class="name">成茜</span><span class="date">2013.05.16 ~ 2013.05.30</span><span class="money">￥28</span><span class="pay"><input name="" type="button" value="账单结算" class="btn"/></span><span class="log"><input name="foodrecord" type="button" value="历史记录" class="btn"/></span></li>
              <li><span class="name">蔡东</span><span class="date">2013.05.16 ~ 2013.05.30</span><span class="money">￥13</span><span class="pay"><input name="" type="button" value="账单结算" class="btn"/></span><span class="log"><input name="" type="button" value="历史记录" class="btn"/></span></li>
              </ul>
				<p class="food_cost_info">共<strong>10</strong>条记录，总计：<b>205</b>元</p>
               </div>
            </form>
        </div>
        <div class="bottom">
            <p>　　</p>
        </div>
    </div>
    <div class="footer">Copyright © 2013 <a href="http://www.qijinsoft.com/" target="_blank" title="齐进网络">齐进网络</a> All rights reserved.</div>
</div>


<?php }} ?>