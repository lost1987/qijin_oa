$(function(){
        $('.main').find("input[name='modify']").each(function(){
            $(this).click(function(){
                var _this = $(this);
                $.post('food_modify_window','',function(data){
                        art.dialog({
                            title:'修改菜单',
                            content:data,
                            padding:0,
                            fixed:true
                        })
                });
            });
        })
});