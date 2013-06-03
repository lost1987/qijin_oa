<?php
$config['site_title'] = '齐进OA办公系统';
$config['site_meta'] = array(
    'equiv' => array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv'),
    'robots' => array('name' => 'robots', 'content' => 'all'),
    'copyright' => array('name' => 'Copyright', 'content' => 'Copyright (c) QIJINSOFT'),
    'description' => array('name' => 'Description', 'content' => '齐进OA办公系统'),
    'keywords' => array('name' => 'Keywords', 'content' => '齐进OA办公系统，OA系统'),
);

$config['menu'] = array(
    'my' => array(
        '#title' => '个人档案',
        '#class' => 'info',
        'level1' => array(
            'info' => array('#title' => '我的资料','#current' => FALSE,),
            'avator' => array('#title'=>'修改头像','#current'=>FALSE),
            'contract' => array('#title'=>'我的合同','#current'=>FALSE),
        ),
    ),
    'food' => array(
        '#title' => '我要点餐',
        '#class' => 'food',
        'level1' => array(
            'food_menu' => array('#title'=>'菜单大全','#current'=>FALSE),
            'food_manage' => array('#title'=>'菜单管理','#current'=>FALSE),
            'food_today' => array('#title'=>'今日点餐','#current'=>FALSE),
            'food_cost' => array('#title'=>'费用清单','#current'=>FALSE),
        )
    ),
    'power' => array(
        '#title' => '权限管理',
        '#class' => 'power',
        'level1' => array(
            'role' => array('#title'=>'角色','#current'=>FALSE),
            'permissions' => array('#title'=>'权限','#current'=>FALSE),
        ),
    ),
    'hr' => array(
        '#title' => '人事管理',
        '#class' => 'department',
        'level1' => array(
            'department' => array('#title'=>'部门管理','#current'=>FALSE),
            'staff' => array('#title'=>'员工管理','#current'=>FALSE),
            'candidates' => array('#title'=>'应聘资料管理','#current'=>FALSE),
        ),
    ),
    'attendance' => array(
        '#title' => '考勤管理',
        '#class' => 'attendance',
        'level1' => array(
            'time_clock' => array('#title'=>'打卡记录','#current'=>FALSE),
            'late_statistics' => array('#title'=>'迟到统计','#current'=>FALSE),
        ),
    ),
);

$config['educational_background'] = array(
     '1' => '初中',
     '2' => '高中',
     '3' => '中技',
     '4' => '中专',
     '5' => '大专',
     '6' => '本科',
     '7' => '硕士',
     '8' => '博士',
     '9' => '其他',
);

//职务
$config['sector'] = array(
    '1' => '',
    '2' => ''
);
