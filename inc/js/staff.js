$(function(){

     $("#birthday").datepicker({changeMonth:true,changeYear:true,yearRange:"1930:2100"});
     $("#join_time").datepicker({changeMonth:true,changeYear:true,yearRange:"1930:2100"});

     //验证
     $.util.validate({
         formid:"staff_form",
         submit_btn_id:"main-submit",
         fields:[
             {
                 fid:"age",
                 tip:"请填写正确的年龄,18-80",
                 max_length:2,
                 min_length:1,
                 max_value:80,
                 min_value:18,
                 is_numberic:true
             },
             {
                fid:"truename",
                is_required:true,
                tip:"姓名不能为空"
             },
             {
                 fid:"join_time",
                 is_required:true,
                 tip:"入职时间不能为空"
             },
             {
                 fid:"phone",
                 is_required:true,
                 is_phone:true,
                 tip:"手机号码格式不正确"
             }
         ]
     });

     $("#birthday").change(function(){
            var today = new Date().getTime();
            var birthday = $(this).val();
            if(birthday.replace(/\s+/g,'') == '')
            return;

            birthday = birthday.replace(/[^0-9]/g,'-');
            var birthday_time = $.util.date.dateToTime(birthday);
            var age = $.util.date.timediff_year(birthday_time,today);
            $("#age").val(age);
     });

    $("#join_time").change(function(){
           var today = new Date().getTime();
           var join_time = $(this).val();
           if(join_time.replace(/\s+/g,'') == '')
           return;

           join_time = join_time.replace(/[^0-9]/g,'-');
           var join_time = $.util.date.dateToTime(join_time);
           var work_age = $.util.date.timediff_year(join_time,today);
           $("#work_age").val(work_age);
    })
});

