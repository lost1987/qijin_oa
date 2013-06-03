
var themes = {};
themes.dialog_tips = '<div class="dialog-ok" title="提示"><p>#content#</p></div>';

;(function($){
    $(function(){
        //power
        $(".main .power ul li:nth-child(even)").addClass("even").siblings(':nth-child(odd)').addClass('odd');
        department_oddeven();
        //menu
        $('.menu ul li').click(function(){
            $(this).children('h2').addClass('current');
            $(this).children('p').addClass('display');
            $(this).children().find('.minus').removeClass('minus').addClass('plus');
            $(this).siblings().children('h2').removeClass('current');
            $(this).siblings().children('p').removeClass('display');
            $(this).siblings().children().find('.plus').removeClass('plus').addClass('minus');
        });
    });


})(jQuery);
function show_tips(str,url){
    $(themes.dialog_tips.replace('#content#',str)).dialog({
        modal: true,
        buttons: {
            Ok: function() {
                $( this ).dialog( "close" );
                if(url != undefined){
                    location.href = url;
                }
            }
        }
    });
}

function department_oddeven(){
    $(".main .department ul").find('li').each(function(index,o){
        if(index%2 == 0){
            $(o).children('div').addClass('odd');
        }else{
            $(o).children('div').addClass('even');
        }
//            console.log(index);
    });
}

function common_delete(o){
    var url = $(o).attr('href');
    $.ajax({
        'url' : url,
        'type' : 'get',
        'data' : {},
        'success' : function(statusData){
            var objectData = $.parseJSON(statusData);
            if(objectData.status){
                $(o).parent().parent().remove();
                show_tips("删除成功！",location.href);
            }else{
                show_tips("删除失败！");
            }
        }
    });
    return false;
}
