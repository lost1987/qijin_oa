<?php
/**
 * 权限管理配置文件
 */
$config['roles_permissions']['my'] = array(
    'name' => '个人档案',
    'model' => array(
        'info' => array(
            'name' => '我的资料',
            'action' => array(
                'access' => array(
                    'name'=>'查看资料',
                    'description' => '查看用户资料',
                ),
                'edit' => array(
                    'name' => '编辑资料',
                    'description' => '编辑用户资料',
                ),
            ),
        ),
        'avator' => array(
            'name' => '修改头像',
            'action' => array(
                'access' => array(
                    'name'=>'查看用户头像',
                ),
                'edit' => array(
                    'name' => '上传用户头像',
                ),
            ),
        ),
        'contract' => array(
            'name' => '修改合同',
            'action' => array(
                'access' => array(
                    'name'=>'查看合同',
                ),
                'edit' => array(
                    'name' => '修改合同',
                ),
            ),
        ),
    ),
);

$config['roles_permissions']['power'] = array(
    'name' => '权限管理',
    'model' => array(
        'role' => array(
            'name' => '角色管理',
            'action' => array(
                'access' => array(
                    'name'=>'查看角色',
                ),
                'edit' => array(
                    'name' => '编辑角色',
                    'description' => '编辑用户资料',
                ),
            ),
        ),
        'permissions' => array(
            'name' => '权限管理',
            'action' => array(
                'access' => array(
                    'name'=>'查看用户权限',
                ),
                'edit' => array(
                    'name' => '编辑用户权限',
                ),
            ),
        ),
    ),
);

$config['roles_permissions']['food'] = array(
    'name' => '我要点餐',
    'model' => array(
        'menu' => array(
            'name' => '菜单大全',
            'action' => array(
                'access' => array(
                    'name'=>'访问菜单大全',
                ),
            ),
        ),
        'menu_manage' => array(
            'name' => '菜单管理',
            'action' => array(
                'access' => array(
                    'name'=>'访问菜单管理',
                ),
                'edit' => array(
                    'name' => '编辑菜单',
                ),
            ),
        ),
    ),
);