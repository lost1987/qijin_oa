<div class="food_managet_pop">
    <form action="food_add" method="post" id="submit" enctype="multipart/form-data">

    <p><strong>菜名：</strong>
        <input name="foodname" type="text" class="txt" />
        <strong>单价：</strong>
        <input name="foodprice" type="text" class="txt2" />
        元</p>

    <p><strong>选择分类:</strong><select name="foodtype">
            <option value="8">八元区</option>
            <option value="10">十元区</option>
            <option value="12">十二元区</option>
            <option value="14">十四元区</option>
        </select></p>
    <p>
        <input name="userfile" type="file" class="file" />
        <input name="" type="submit" value="提交" class="btn" onclick=" document.submit.submit();"/>
    </p>
    </form>
</div>
