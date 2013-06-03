;(function($){
    $(function(){

        /* 部门人员悬浮变色 */
        $(".main .department ul li dt").hover(function(){
            $(this).addClass("move");
        })
        $(".main .department ul li dt").mouseleave(function(){
            $(this).removeClass("move");
        })

        $('.sector-list').nestedSortable({
            forcePlaceholderSize: true,
            handle: 'div',
//            helper:	'clone',
            items: 'li',
//            opacity: .6,
            placeholder: 'placeholder',
//            revert: 250,
//            tabSize: 25,
//            tolerance: 'pointer',
            toleranceElement: '> div',
            listType : 'ul',
            maxLevels: 2,

            isTree: true,
            expandOnHover: 700,
            startCollapsed: true
        });

        $("#department_form").validationEngine({
            ajaxFormValidation: true,
            ajaxFormValidationMethod: 'post',
            promptPosition: "topRight",
            onAjaxFormComplete: public_ajaxValidationCallback,
            onBeforeAjaxFormValidation : function(){
                $.fancybox.close();
                $.fancybox.showLoading();
            }
        });

        $('#main-save').click(function(){
            $(this).attr('disabled',true);
            var serialized = $('ul.sector-list').nestedSortable('serialize');
            $.ajax({
                url : $('#department_list_form').attr('action'),
                type : 'POST',
                data : $('#department_list_form').serialize()+'&'+serialized,
                'success' : function(statusData){
                    var objectData = $.parseJSON(statusData);
                    if(objectData.status){
                        show_tips("保存成功！",location.href);
                    }else{
                        show_tips("保存失败！");
                    }
                    $(this).attr('disabled',false);
                }
            });
        });

        $('.show_all').click(function(){
            var $parent = $(this).parents('div').eq(0);
            if($parent.siblings('div,ul').hasClass('hide')){
                $(this).text('隐藏全部');
                $parent.siblings('div,ul').removeClass('hide');
                $parent.find('span>b').removeClass('close').addClass('open');
            }else{
                $(this).text('显示全部');
                $parent.siblings('div,ul').addClass('hide');
                $parent.find('span>b').removeClass('open').addClass('close');
            }
        });

        $('.edit').click(function(){
            var $o = $(this).parent().siblings('span');
            var $show_name = $o.children('a.show_name');
            var $input_name = $o.children('input.edit_name');
            if($show_name.hasClass('hide')){
                $show_name.removeClass('hide');
                $input_name.addClass('hide');
                $(this).text('编辑');
            }else{
                $show_name.addClass('hide');
                $input_name.removeClass('hide');
                $(this).text('取消');
            }
        });

        $('dl#all_staff_sortable,dl.staff_sortable').sortable({
            connectWith:'dl',
            placeholder:"sort-small-highlight",
            items: "dt:not(.default_department)",
            update : function(event,ui){
                var $p = $(ui.sender);
                if($p.children().size() == 0){
                    $p.append('<dt class="default_department">暂无成员</dt>');
                }
            },
            stop : function(event,ui){
                var $this = ui.item;
                var $ulp = ui.item.parent();
                var $p = ui.item.parent().parent();
                var $sector_uid = $p.children('.sector_uid').val();
                $sector_uid = $sector_uid != undefined ? $sector_uid : '';
                $this.children('.user_sector').val($sector_uid);
                if($ulp.children().size()>0){
                    $ulp.children().remove('.default_department');
                }
            }
        });
        $('.default_department').disableSelection();
        $('#department_list_form').find('a.delete').bind('click',function(){
            var _this = this;
            var $p = $(this).parent().parent().siblings('ul');
            if($p.size()>0){
                $(themes.dialog_tips.replace('#content#','请删除该分类下的其他分类才能删除！')).dialog({
                    modal: true,
                    buttons: {
                        Ok: function() {
                            $( this ).dialog( "close" );
                        }
                    }
                });
                return false;
            }else{
                $(themes.dialog_tips.replace('#content#','确定要删除吗？')).dialog({
                    modal: true,
                    buttons: {
                        Ok: function() {
                            $( this ).dialog( "close" );
                            common_delete(_this);
                        }
                    }
                });
            }
            return false;
        });
    });
})(jQuery);

function public_ajaxValidationCallback(status, form, json, options){
    $.fancybox.hideLoading();
    if (status === true) {
        var data = json;
        if(data.status == true){
            show_tips('添加成功！',location.href);
        }else{
            show_tips('添加失败！');
        }

    }else{
        show_tips('添加失败！');
    }
}
