{include file="public/head.tpl"}
{include file="public/head.tpl"}
<div class="warp">
    {include file="public/sidebar.tpl"}
    <div class="box">
        {include file="public/header.tpl"}
        <div class="title">
            <p><span class="power">
            {include file="public/breadcrumbs.tpl"}
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
                            <span class="pic"><img src="{base_url u='inc/images/food.jpg'}" width="89" height="72" alt=""/></span>
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
