<?php /* Smarty version Smarty-3.1.13, created on 2013-06-03 16:15:05
         compiled from "oa_app/views/food/food_manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78614066551ac50898f98d0-39374793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fae17b99dde894203b64cef1fe547b680845a4b' => 
    array (
      0 => 'oa_app/views/food/food_manage.tpl',
      1 => 1370244880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78614066551ac50898f98d0-39374793',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ac50899118f6_60441727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac50899118f6_60441727')) {function content_51ac50899118f6_60441727($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                <div class="food_manage">
                    <div class="food_manage_tool">
                    	<span>
                        <input name="" type="button" value="全选" class="btn"/>
                        <input name="" type="button" value="删除" class="btn"/>
                        </span>
                        <b>查看菜名：</b><input name="" type="text" class="txt" />
                        <input name="" type="submit" value="提交" class="btn"/>
                    </div>
                    <p>
                    	<span class="checkbox">&nbsp;</span>
                        <span class="dish">菜名</span>
                        <span class="pic">图片</span>
                        <span class="money">单价</span>
                        <span class="amend">修改</span>
                        <span class="delete">删除</span>
                    </p>
                    <ul>
                        <li>
                        	<span class="checkbox"><input name="" type="checkbox" value="" class="checkbox"/></span>
                            <span class="dish">蘑菇土豆丝炒蛋</span>
                            <span class="pic"><img src="<?php echo base_url(array('u'=>'inc/images/food.jpg'),$_smarty_tpl);?>
" width="89" height="72" alt=""/></span>
                            <span class="money">￥14</span>
                            <span class="amend"><input name="modify" type="button" value="修 改" class="btn"/></span>
                            <span class="delete"><input name="" type="button" value="删 除" class="btn"/></span>
                        </li>
                        <li>
                        	<span class="checkbox"><input name="" type="checkbox" value="" class="checkbox"/></span>
                            <span class="dish">蘑菇土豆丝炒蛋</span>
                            <span class="pic"><img src="inc/images/food.jpg" width="89" height="72" alt=""/></span>
                            <span class="money">￥14</span>
                            <span class="amend"><input name="" type="button" value="修 改" class="btn"/></span>
                            <span class="delete"><input name="" type="button" value="删 除" class="btn"/></span>
                        </li>
                        <li>
                        	<span class="checkbox"><input name="" type="checkbox" value="" class="checkbox"/></span>
                            <span class="dish">蘑菇土豆丝炒蛋</span>
                            <span class="pic"><img src="inc/images/food.jpg" width="89" height="72" alt=""/></span>
                            <span class="money">￥14</span>
                            <span class="amend"><input name="" type="button" value="修 改" class="btn"/></span>
                            <span class="delete"><input name="" type="button" value="删 除" class="btn"/></span>
                        </li>
                        <li>
                        	<span class="checkbox"><input name="" type="checkbox" value="" class="checkbox"/></span>
                            <span class="dish">蘑菇土豆丝炒蛋</span>
                            <span class="pic"><img src="inc/images/food.jpg" width="89" height="72" alt=""/></span>
                            <span class="money">￥14</span>
                            <span class="amend"><input name="" type="button" value="修 改" class="btn"/></span>
                            <span class="delete"><input name="" type="button" value="删 除" class="btn"/></span>
                        </li>
                    </ul>
                    <div class="page"><span>共10条记录</span><a href="#">首页</a><a href="#">上一页</a><a href="#"><strong>1</strong></a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">下一页</a><a href="#">末页</a></div>
                </div>
            </form>
        </div>
        <div class="bottom">
            <p>　　</p>
        </div>
    </div>
    <div class="footer">Copyright © 2013 <a href="http://www.qijinsoft.com/" target="_blank" title="齐进网络">齐进网络</a> All rights reserved.</div>
</div>
</body>
</html>
<?php }} ?>