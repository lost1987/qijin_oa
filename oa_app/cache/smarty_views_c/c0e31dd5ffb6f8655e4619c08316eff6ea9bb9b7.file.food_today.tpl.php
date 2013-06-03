<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 06:41:02
         compiled from "oa_app\views\food\food_today.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2931251ac3a7e853608-49957344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0e31dd5ffb6f8655e4619c08316eff6ea9bb9b7' => 
    array (
      0 => 'oa_app\\views\\food\\food_today.tpl',
      1 => 1370237086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2931251ac3a7e853608-49957344',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ac3a7e9b5006_43920953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac3a7e9b5006_43920953')) {function content_51ac3a7e9b5006_43920953($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                <div class="food_today">
                    <div class="food_today_tool"><span>
                        <input name="" type="button" value="全选" class="btn"/>
                        <input name="" type="button" value="删除" class="btn"/>
                        </span><b>查看日期：</b>
                        <input name="" type="text" class="txt" />
                        <input name="" type="submit" value="提交" class="btn"/>
                    </div>
                    <p>
                    	<span class="checkbox">&nbsp;</span>
                        <span class="order">订单号</span>
                        <span class="name">姓名</span>
                        <span class="dish">菜名</span>
                        <span class="number">数量</span>
                        <span class="money">金额</span>
                        <span class="date">日期</span>
                    </p>
                    <ul>
                        <li>
                        	<span class="checkbox"><input name="" type="checkbox" value="" class="checkbox" /></span>
                            <span class="order">123456789000</span>
                            <span class="name">成茜</span>
                            <span class="dish">蘑菇土豆丝炒蛋</span>
                            <span class="number">1</span>
                            <span class="money">￥7</span>
                            <span class="date">2013-05-19 10:12:06</span>
                        </li>
                        <li>
                        	<span class="checkbox"><input name="" type="checkbox" value="" class="checkbox" /></span>
                            <span class="order">123456789000</span>
                            <span class="name">成茜</span>
                            <span class="dish">蘑菇土豆丝炒蛋</span>
                            <span class="number">1</span>
                            <span class="money">￥7</span>
                            <span class="date">2013-05-19 10:12:06</span>
                        </li>
                        <li>
                        	<span class="checkbox"><input name="" type="checkbox" value="" class="checkbox" /></span>
                            <span class="order">123456789000</span>
                            <span class="name">成茜</span>
                            <span class="dish">蘑菇土豆丝炒蛋</span>
                            <span class="number">1</span>
                            <span class="money">￥7</span>
                            <span class="date">2013-05-19 10:12:06</span>
                        </li>
                    </ul>
                    <p class="food_today_info">8元区：<strong>10</strong>份，10元区：<strong>6</strong>份，12元区：<strong>15</strong>份，共计：<b>21</b>份</p>
                    <div class="clear"></div>
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