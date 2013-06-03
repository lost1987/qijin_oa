$(function(){

        $('.main').find("input[name='modify']").each(function(){
            $(this).click(function(){
                $.post('food_modify_window','',function(data){
                    $('.main').fancybox({
                        title:"修改菜单",
                        content:data
                    });
                });
            });
        })
});