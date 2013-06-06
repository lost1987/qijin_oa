;(function($){
    $(function(){
        $('.sort-list').sortable({
            placeholder:"sort-list-highlight",
            update : function(event,ui){
                $(this).children().find("input[name$='[sorting]']").each(function(i,o){
                    $(o).val(i+1);
                });
                $(this).children('li').removeClass().siblings(':nth-child(even)').addClass('even').siblings(':nth-child(odd)').addClass('odd');
//                $(this).children('li:odd').addClass('color');
            }
        });
//        $('.sort-list').disableSelection();
        $('#role-main-form').find('a.edit').bind('click',function(){ return role_edit(this);});
        $('#role-main-form').find('a.delete').bind('click',function(){ return role_delete(this);});

        $('#main-submit').click(function(){
            $(this).attr('disabled','disabled');
            var edit = false;
            var $form = $('#role-main-form');
            var url = $form.attr('action');
            $.ajax({
                'url' : url,
                'type' : 'POST',
                'data' : $form.serialize(),
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

        $('#role-form').submit(function(){
            if($(this).find('input[name="name"]').val() == ''){
                show_tips('角色名不能为空!');
                return false;
            }
            var url = $(this).attr('action');
            var data = $(this).serialize();
            $.ajax({
                'url' : url,
                'type' : 'POST',
                'data' : data,
                'success' : function(statusData){
                    var objectData = $.parseJSON(statusData);
                    if(objectData.status){
                        show_tips("添加角色成功！",location.href);
                    }else{
                        show_tips("添加角色失败！");
                    }
                }
            });
            return false;
        });
    });

    function role_edit(o){
        var $role_edit = $(o).parent().siblings().find("[class^='edit']");
        var $role_edit_show = $(o).parent().siblings().find(".show_text");
        var $role_edit_action = $(o).parent().siblings("input.action_type");

        if($role_edit_action.val() == 'show'){
            $role_edit_action.val('edit');
            $role_edit.removeClass('hide');
            $role_edit_show.addClass('hide');
            o.innerHTML = "取消编辑";
        }else{
            $role_edit_action.val('show');
            $role_edit.addClass('hide');
            $role_edit_show.removeClass('hide');
            $role_edit.each(function(i,eo){
                $(eo).val($(eo).siblings('.show_text').text());
            });
            o.innerHTML = "编辑角色";
        }
    }

    function role_delete(o){
        var url = $(o).attr('href');
        $.ajax({
            'url' : url,
            'type' : 'get',
            'data' : {},
            'success' : function(statusData){
                var objectData = $.parseJSON(statusData);
                if(objectData.status){
                    $(o).parent().parent().remove();
                    show_tips("删除成功！");
                }else{
                    show_tips("删除失败！");
                }
            }
        });
        return false;
    }

})(jQuery);