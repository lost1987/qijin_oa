<?php /* Smarty version Smarty-3.1.13, created on 2013-06-04 13:08:38
         compiled from "oa_app/views/food/food_order_record.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54246114851ad76569b9941-16528893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '375faab84cd553d0f49d1d4f34ab031f485da18b' => 
    array (
      0 => 'oa_app/views/food/food_order_record.tpl',
      1 => 1370321165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54246114851ad76569b9941-16528893',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ad76569c3430_57495487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ad76569c3430_57495487')) {function content_51ad76569c3430_57495487($_smarty_tpl) {?><div class="food_cost_pop">
    <script>
        $(function(){
                $("#startdate").datepicker({});
        })
    </script>
    <form action="" method="get">
        <p><label>查找日期：</label><input name="" id="startdate" type="text" class="txt" />至<input name="" type="text" class="txt" /><input name="" type="submit" value="提交" class="btn"/>历史消费：<b>125</b>元</p>
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
</div><?php }} ?>