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


