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
               <div class="food_cost">
              <div class="food_cost_tool"><b>查找姓名：</b><input name="" type="text" class="txt" /><input name="" type="submit" value="提交" class="btn"/></div>
              <p><span class="name">姓名</span><span class="date">日期</span><span class="money">金额</span><span class="pay">结算</span><span class="log">记录</span></p>
              <ul>
              <li><span class="name">成茜</span><span class="date">2013.05.16 ~ 2013.05.30</span><span class="money">￥28</span><span class="pay"><input name="" type="button" value="账单结算" class="btn"/></span><span class="log"><input name="" type="button" value="历史记录" class="btn"/></span></li>
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

<div class="food_cost_pop">
    <form action="" method="get">
        <p><em>历史记录</em></p>
        <p><label>查找日期：</label><input name="" type="text" class="txt" />至<input name="" type="text" class="txt" /><input name="" type="submit" value="提交" class="btn"/>历史消费：<b>125</b>元</p>
        <div class="food_cost_title"><span class="order">订单号</span><span class="dish">菜名</span><span class="number">数量</span><span class="money">价格</span><span class="date">日期</span></div>
        <ul>
        <li><span class="order">123456789000</span><span class="dish">蘑菇土豆丝炒蛋</span><span class="number">1</span><span class="money">￥14</span><span class="date">2013-03-05</span></li>
        <li><span class="order">123456789000</span><span class="dish">蘑菇土豆丝炒蛋</span><span class="number">1</span><span class="money">￥14</span><span class="date">2013-03-05</span></li>
        <li><span class="order">123456789000</span><span class="dish">蘑菇土豆丝炒蛋</span><span class="number">1</span><span class="money">￥14</span><span class="date">2013-03-05</span></li>
        <li><span class="order">123456789000</span><span class="dish">蘑菇土豆丝炒蛋</span><span class="number">1</span><span class="money">￥14</span><span class="date">2013-03-05</span></li>
        <li><span class="order">123456789000</span><span class="dish">蘑菇土豆丝炒蛋</span><span class="number">1</span><span class="money">￥14</span><span class="date">2013-03-05</span></li>
        </ul>
        <p class="page"><span>共10条记录</span><a href="#">首页</a><a href="#">上一页</a><a href="#"><strong>1</strong></a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">下一页</a><a href="#">末页</a></p>
    </form>
</div>
