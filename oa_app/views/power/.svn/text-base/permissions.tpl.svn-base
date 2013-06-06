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
                <p>
                    <em>权限</em>
                    {foreach $roles as $role}
                    <span>{$role.name}</span>
                    {/foreach}
                </p>
                <form id="role-main-form" method="post" action="{site_url u='power/permissions_edit_submit/'|cat:$current_role_id}" enctype="application/x-www-form-urlencoded">
                    <ul>
                        {foreach $roles_permissions as $key=>$value}
                            {*<li><label><b>{$value.name}</b></label></li>*}
                            {foreach $value.model as $module_name=>$model_settings}
                                <li><label><b>{$model_settings.name}</b></label></li>
                                {foreach $model_settings.action as $model_key=>$model_permission}

                                <li>
                                        <label>
                                            {$model_permission.name}
                                        {if isset($model_permission.description) != ''}
                                        <em>{$model_permission.description}</em>
                                        {/if}
                                        </label>
                                        {foreach $roles as $role_key => $role}
                                        {assign var=checked value=''}
                                        {if isset($role.role_permission[$key|cat:'/'|cat:$module_name]) && in_array($model_key,$role.role_permission[$key|cat:'/'|cat:$module_name])}
                                            {$checked = 'checked="checked"'}
                                        {/if}
                                        <em><input name="roles_permissions[{$role.rid}][{$key|cat:'/'|cat:$module_name}][{$model_key}]" type="checkbox" value="1" {$checked} /></em>
                                        {/foreach}
                                </li>
                                {/foreach}

                            {/foreach}
                        {/foreach}
                        <div class="clear"></div>
                    </ul>
                </form>
            </div>
        </div>
        <div class="bottom">
            <p>　　</p>
        </div>
    </div>
{include file="public/footer.tpl"}