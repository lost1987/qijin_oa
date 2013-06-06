$(function(){
    $('.main').find("input[name='foodrecord']").each(function(){
        $(this).click(function(){
            var _this = $(this);
            $.post('food_order_record','',function(data){
                $.art_win('历史记录',data,true);
            });
        });
    });


});
