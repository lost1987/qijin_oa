$(function(){
    $('.main').find("input[name='orderfood']").each(function(){
        $(this).click(function(){
            var _this = $(this);
            $.post('food_menu_window','',function(data){
             var window =   art.dialog({
                    title:"提交",
                    content:data,
                    padding:0,
                    fixed:true,
                    lock:true,
                    button: [{
                        value: '提交',
                        focus: true,
                        callback: function () {

                            $.post('food_total_window','',function(data){
                                $.art_win('订单',data,true);
                            })

                        }
                    }]
                });
            });
        });
    })
});