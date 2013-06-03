{include file="public/head.tpl"}
<div class="warp">
    {include file="public/sidebar.tpl"}
    <div class="box">
    {include file="public/header.tpl"}
        <div class="title">
            <p><span class="power">
                {include file="public/breadcrumbs.tpl"}
            </span>
                <input id="main-submit" type="button" value="保存" class="save" />
            </p>
        </div>
        <div class="main">
            <div class="power">
                <p><strong>角色</strong><strong>操作</strong></p>
                <form id="role-main-form" method="post" action="{site_url u='power/role_edit_submit'}" enctype="application/x-www-form-urlencoded">
                <ul class="sort-list">
                    {foreach $role_list as $role}
                    <li>
                        <input type="hidden" name="role[{$role.rid}][sorting]" value="{$role.sorting}" >
                        <input type="hidden" class="role_rid" value="{$role.rid}">
                        <input type="hidden" class="action_type" value="show">
                        <span>
                            <input class="edit_role_name hide" type="text" name="role[{$role.rid}][name]" value="{$role.name}" />
                            <label class="show_text">{$role.name}</label>
                        </span>
                        <em><a class="edit" href="javascript:void(0);">编辑角色</a></em>
                        <em><a href="{site_url u='power/permissions/'|cat:$role.rid}">编辑权限</a></em>
                        <em><a class="delete" href="{site_url u='power/role_delete_submit/'|cat:$role.rid}">删除</a></em>
                    </li>
                    {/foreach}
                    <div class="clear"></div>
                </ul>
                </form>
                <form id="role-form" action="{site_url u='power/role_add_submit'}" method="post" enctype="application/x-www-form-urlencoded">
                <p class="add">
                        <input name="name" type="text" class="txt"/>
                        <input type="submit" value="添加角色" class="btn"/>
                </p>
                </form>
            </div>
        </div>
        <div class="bottom">
            <p>　　</p>
        </div>
    </div>
{include file="public/footer.tpl"}