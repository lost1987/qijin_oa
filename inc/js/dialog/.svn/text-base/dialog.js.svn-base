(function($){
    $.extend({
        art_tip:function(title,content){
            var _title = false;
            if(title != '')_title = title;
            var _content = '';
            if(content != '' && content != null) _content = content;
            art.dialog({
                id:"tip",
                title:_title,
                content:_content,
                fixed:true,
                time:4000
            })
        },
        art_win:function(title,html,lock){
            var _title = false;
            var _lock = false;
            var _html = '';

            if(title != '')
            _title = title;
            if(lock != null)
            _lock=lock;
            if(html != '' && html != null) _html = html;

            art.dialog({
                id:"window",
                title:_title,
                content:_html,
                fixed:true,
                lock:_lock,
                padding:0
            })
        }
    });
})(jQuery)