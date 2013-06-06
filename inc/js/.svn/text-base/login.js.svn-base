;(function($){
    $(function(){
        $('#login-form').submit(function(){
            var status = true;
            var username = $('#username'),password = $('#password'),default_username = "用户名",default_password = "******";
            if(username.val() == default_username || username.val() == ''){
                status = false;
            }
            if(password.val() == default_password || password.val() == ''){
                status = false;
            }
            if(status == false){
                $(themes.dialog_tips.replace('#content#','请填写用户名或密码！')).dialog({
                    modal: true,
                    buttons: {
                        Ok: function() {
                            $( this ).dialog( "close" );
                        }
                    }
                });
            }else{
                $.ajax({
                    'url' : $(this).attr('action'),
                    'type' : 'POST',
                    'data' : {'username':username.val(),'password':password.val()},
                    'success' : function(statusData){
                        var objectData = $.parseJSON(statusData);
                        if(objectData.status == true){
                            location.href = DefaultSetting.basePath;
                        }else{
                            $(themes.dialog_tips.replace('#content#','用户名或密码错误！')).dialog({
                                modal: true,
                                buttons: {
                                    Ok: function() {
                                        $( this ).dialog( "close" );
                                    }
                                }
                            });
                        }
                    }
                });
            }
            return false;
        });
    });
})(jQuery);
