$(function(){

     if($.isEmptyObject($("#birthday") == false))
     $("#birthday").datepicker({});

     if($.isEmptyObject($("#join_time") == false))
     $("#join_time").datepicker({});

     $(".main").validate({
          rules:{
              truename:'required',
              age:{digits:true}
          }
     });
});

