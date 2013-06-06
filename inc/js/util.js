/**
 * jquery扩展工具类
 * author:卜峘
 * 依赖插件: jquery,artDialog
 */
(function($){

    $.extend({
            util:{
                /**
                 * 表单验证类,使用示例:
                    $.util.validate({
                         formid:"staff_form", //表单的ID
                         submit_btn_id:"main-submit",//表单提交按钮的ID
                         fields:[
                             fid:input字段的ID tip:提示 callback 自定义验证
                             {
                                 fid:"age",
                                 is_required:true,
                                 max_length:2,
                                 min_length:1,
                                 is_numberic:true,
                                 tip:"",
                                 max_value:80,
                                 min_value:20,
                                 is_idcard:false,
                                 is_phone:false,
                                 is_email:false,
                                 callback:function(field_obj){//field_obj 表示当前的表单字段对象
                                        alert(field_obj.value);
                                        return false;
                                 }
                             }
                         ],
                         success:function(){
                             alert('success');//如果不设置回调,验证成功后会自动提交
                         },
                         failed:function(){
                             alert('failed');
                         }
                     });
                 */
                 validate:function(options){
                        _this = this;
                        var _default = {
                            formid:"",
                            submit_btn_id:"",
                            fields:[
                                {fid:'',is_required:null,max_length:null,min_length:null,is_numberic:null,tip:null,max_value:null,min_value:null,is_idcard:null,is_phone:null,is_email:null,callback:null}
                             ],
                            success:null,
                            failed:null
                        };
                        var _options = $.extend({},_default,options);
                        var _form,_submit_btn,_fields,_fields_num,_correct_fields_num;

                        if(_options.formid == null || _options.formid == '' || _options.submit_btn_id == null || _options.submit_btn_id == '')return;
                        if($.isEmptyObject($("#"+_options.formid))){
                            alert('请确认表单ID是否存在,本插件仅支持ID节点');
                            return;
                        }
                        if($.isEmptyObject($("#"+_options.submit_btn_id))){
                            alert('请确认提交按钮ID是否存在,本插件仅支持ID节点');
                        }

                        _form = $("#"+_options.formid);//表单对象

                        _fields = _options.fields;
                        _fields_num = _fields.length;

                        //绑定事件
                        _form.find('input').bind('blur keyup',function(){
                                _correct_fields_num = 0;
                                $(_fields).each(function(){
                                    _field = $("#"+this.fid);
                                    _field_value = _field.val();
                                    _field_color = _field.css('border-color');
                                    _field_tip = document.getElementById($(_field).attr("id")+"_tip");
                                    _field_tip_remove = true;

                                    if(!_this.is_empty(this.is_required) && _this.is_empty(_field_value) == this.is_required){
                                        _field.css('border-color','red');
                                         if($.isEmptyObject(_field_tip))
                                         _this.error_tip(this.tip,_field);
                                        _field_tip_remove = false;
                                        return true;
                                    }

                                    if(!_this.is_empty(_field_value) && !_this.is_empty(this.max_length) && !_this.max_length(_field_value,this.max_length)){
                                        _field.css('border-color','red');
                                        if($.isEmptyObject(_field_tip))
                                        _this.error_tip(this.tip,_field);
                                        _field_tip_remove = false;
                                        return true;
                                    }

                                    if(!_this.is_empty(_field_value) && !_this.is_empty(this.min_length) && !_this.min_length(_field_value,this.min_length) ){
                                        _field.css('border-color','red');
                                        if($.isEmptyObject(_field_tip))
                                        _this.error_tip(this.tip,_field);
                                        _field_tip_remove = false;
                                        return true;
                                    }

                                    if(!_this.is_empty(_field_value) && !_this.is_empty(this.is_numberic) && _this.is_numberic(_field_value) != this.is_numberic){
                                        _field.css('border-color','red');
                                        if($.isEmptyObject(_field_tip))
                                        _this.error_tip(this.tip,_field);
                                        _field_tip_remove = false;
                                        return true;
                                    }

                                    if(!_this.is_empty(_field_value) && !_this.is_empty(this.max_value) && !_this.max_value(_field_value,this.max_value)){
                                        _field.css('border-color','red');
                                        if($.isEmptyObject(_field_tip))
                                        _this.error_tip(this.tip,_field);
                                        _field_tip_remove = false;
                                        return true;
                                    }

                                    if(!_this.is_empty(_field_value) && !_this.is_empty(this.min_value) && !_this.min_value(_field_value,this.min_value)){
                                        _field.css('border-color','red');
                                        if($.isEmptyObject(_field_tip))
                                        _this.error_tip(this.tip,_field);
                                        _field_tip_remove = false;
                                        return true;
                                    }

                                    if(!_this.is_empty(_field_value) && !_this.is_empty(this.is_phone) && _this.is_phone(_field_value) != this.is_phone){
                                        _field.css('border-color','red');
                                        if($.isEmptyObject(_field_tip))
                                        _this.error_tip(this.tip,_field);
                                        _field_tip_remove = false;
                                        return true;
                                    }

                                    if(!_this.is_empty(_field_value) && !_this.is_empty(this.is_email) && _this.is_email(_field_value) != this.is_email){
                                        _field.css('border-color','red');
                                        if($.isEmptyObject(_field_tip))
                                        _this.error_tip(this.tip,_field);
                                        _field_tip_remove = false;
                                        return true;
                                    }

                                    if(!_this.is_empty(_field_value) && !_this.is_empty(this.is_idcard) && _this.is_idcard(_field_value) != this.is_idcard){
                                        _field.css('border-color','red');
                                        if($.isEmptyObject(_field_tip))
                                        _this.error_tip(this.tip,_field);
                                        _field_tip_remove = false;
                                        return true;
                                    }

                                    if(!_this.is_empty(_field_value) && !_this.is_empty(this.callback) && !this.callback.apply(null,_field)){
                                        _field.css('border-color','red');
                                        if($.isEmptyObject(_field_tip))
                                        _this.error_tip(this.tip,_field);
                                        _field_tip_remove = false;
                                        return true;
                                    }

                                    if(_field_tip_remove){
                                        if(!$.isEmptyObject(_field_tip))
                                        $(_field_tip).remove();
                                    }

                                    _correct_fields_num++;
                                    _field.css('border-color',_field_color);
                                 });
                        });

                        var _submit_btn = $("#"+_options.submit_btn_id);//提交按钮对象
                        _submit_btn.attr('type','button');
                         _submit_btn.on('click',function(){
                            if(_correct_fields_num == _fields_num){
                                if(_options.success != null){
                                    _options.success.apply(null);
                                }else{
                                    _form.submit();
                                }
                            }else{
                                if(_options.failed != null){
                                    _options.failed.apply(null);
                                }
                            }
                        });
                 },

                 is_numberic:function(param){
                      if(/\d+/g.test(param))
                      return true;
                      return false;
                 },

                 max_length:function(param,length){
                      if(param.length <= length)
                      return true;
                      return false;
                 },

                 min_length:function(param,length){
                       if(param.length >= length)
                       return true;
                       return false;
                 },

                 max_value:function(param,maxvalue){
                       if(parseInt(param) <= parseInt(maxvalue))
                       return true;
                       return false;
                 },

                 min_value:function(param,minvalue){
                        if(parseInt(param) >= parseInt(minvalue))
                        return true;
                        return false;
                 },


                 is_email:function(param){
                     var emailReg = /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/;
                     if ( emailReg.test(param) )
                     return true;
                     return false;
                 },

                 is_phone:function(param){
                     var pattern=/(^[0-9]{3,4}\-[0-9]{3,8}$)|(^[0-9]{3,8}$)|(^\([0-9]{3,4}\)[0-9]{3,8}$)|(^0{0,1}13[0-9]{9}$)/;
                     if(pattern.test(param))
                     return true;
                     return false;
                 },

                 is_idcard:function(param){
                     if( !(/^\d{15}$/.test(param)|| /^\d{18}$/.test(param)|| /^\d{17}[xX]$/.test(param)) )
                     return false;
                     return true;
                 },

                 is_empty:function(param){
                      if(param == null || param == '')
                      return true;
                      return false;
                 },

                 error_tip:function(message,node){
                      if(this.is_empty(message))return;
                      if(document.getElementById($(node).attr("id")+"_tip") != null)return;

                      var window_main = $("<div>").attr('id',$(node).attr('id')+"_tip");
                      window_main.css("position","absolute").css("z-index",0.9).css('background-color','white').css("display","none");

                      var window_content = $("<div>");
                      window_content.css("width","auto").css("height","auto").css('background-color','#CD3278')
                          .css("text-align","center").css("color","white").css("border","1px solid black").css("padding-left",5).css("padding-right",5)
                          .css("border-color","transparent");
                      window_content.html(message);

                      $("body").append(window_main);
                      window_main.append(window_content);

                      var left = $(node).offset().left;
                      var top = $(node).offset().top + $(node).height() + 4;

                      window_main.css("left",left).css("top",top);
                      window_main.fadeIn(200);
                 },

                 date:{
                      /**
                       * @param date String : 格式必须是 YYYY-MM-DD HH:NN:SS
                       * @return int
                       * **/
                      dateToTime:function(date){
                            var time_array = [],date_array = [];
                            var _date = date.split(' ');
                            var date_prefix = _date[0];
                            if(_date.length > 1){
                                   var date_ext = _date[1];
                                   date_array = date_prefix.split('-');
                                   time_array = date_ext.split(':');
                                   return new Date(date_array[0],date_array[1]-1,date_array[2],time_array[0],time_array[1],time_array[2]).getTime();
                            }else{
                                  date_array = date_prefix.split('-');
                                  return new Date(date_array[0],date_array[1]-1,date_array[2]).getTime();
                            }
                      },

                     /**
                      * 得到2个时间戳之间的年限差
                      * @param time_small 起始时间
                      * @param time_big 结束时间
                      * @return int
                      */
                     timediff_year:function(time_small,time_big){
                            var timediff = time_big - time_small;
                            var yearTime = 60 * 60 * 24 * 365 * 1000;
                            return Math.floor(timediff/yearTime);
                     }
                 },

                effect:{
                    //当滚动条滚动时div到达浏览器顶部的时候 漂浮起来
                    floatTop:function(options){
                        var _default = {element:""};
                        var _options = $.extend({},_default,options);
                        var _this = $(_options.element);
                        var _origin_width = _this.width();
                        var _origin_height = _this.height();
                        var _origin_position = _this.css('position');
                        var _origin_top = _this.offset().top;
                        var _origin_left = _this.offset().left;

                        var scrollChange=false;
                        var blank_div=$("<div>").attr('id','floatTop_blank');
                        $(window).bind("scroll",function(){
                            if($(window).scrollTop() > _origin_top){
                                //插入空div
                                blank_div.css('position',_origin_position)
                                    .css('width',_origin_width)
                                    .css('height',_origin_height);

                                if(scrollChange == false){
                                    _this.before(blank_div);
                                    scrollChange = true;
                                }

                                //脱离文档流
                                _this.css('position','fixed')
                                    .css('top',0)
                                    .css('left',_origin_left)
                                    .css('width',_origin_width)
                                    .css('height',_origin_height)
                                    .css('z-index',1000);

                            }else{
                                if(scrollChange == true){
                                    $(blank_div).remove();
                                    _this.css('position',_origin_position)
                                        .css('width',_origin_width)
                                        .css('height',_origin_height)
                                        .css('z-index',0);
                                    scrollChange = false;
                                }
                            }
                        });
                    }
                }
            }
    });

})(jQuery)