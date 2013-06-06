{include file="public/head.tpl"}
<div class="warp">
    {include file="public/sidebar.tpl"}
    <div class="box">
        {include file="public/header.tpl"}
        <div class="title">
            <p><span class="power">
            {include file="public/breadcrumbs.tpl"}
            </span>
                <input id="main-save" type="button" value="添加" class="save" />
            </p>
        </div>
        <div class="main">
            <div class="department">
                <p><strong>名称</strong><strong>操作</strong></p>
                <form id="department_list_form" action="{site_url u="hr/department_edit_submit/"}" enctype="application/x-www-form-urlencoded" method="post">
                <ul class="sector-list">
                    {foreach $sector_list as $sector}
                    <li id="department_category_{$sector.uid}">
                        <div>
                            <span><input class="edit_name hide" name="department[{$sector.uid}][name]" type="text" value="{$sector.name}"/><a class="show_name">{$sector.name}</a><b class="close">&nbsp;</b></span>
                            <em><a class="show_all" href="javascript:void(0);">显示全部</a></em>
                            <em><a class="edit" href="javascript:void(0);">编辑</a></em>
                            <em><a class="delete" href="{site_url u="hr/department_delete/"|cat:$sector.uid}">删除</a></em>
                        </div>
                        <div class="hide">
                            <input class="sector_uid" type="hidden" value="{$sector.uid}" />
                            <dl class="staff_sortable">
                                {if isset($sector_user[$sector.uid]) && !empty($sector_user[$sector.uid])}
                                    {foreach $sector_user[$sector.uid] as $k=>$v}
                                        <dt>
                                            <input class="user_sector" name="user_sector[{$v.uid}][sector]" type="hidden" value="{$sector.uid}" />
                                            {$v.truename}
                                        </dt>
                                    {/foreach}
                                {else}
                                <dt class="default_department">暂无成员</dt>
                                {/if}
                            </dl>
                        </div>
                        {if !empty($sector.children)}
                            <ul class="hide">
                                {foreach $sector.children as $children_secrot}
                                <li id="department_category_{$children_secrot.uid}">
                                    <div>
                                        <span><input class="edit_name hide" name="department[{$children_secrot.uid}][name]" type="text" value="{$children_secrot.name}"/><a class="show_name">{$children_secrot.name}</a><b class="close">&nbsp;</b></span>
                                        <em><a class="show_all" href="javascript:void(0);">显示全部</a></em>
                                        <em><a class="edit" href="javascript:void(0);">编辑</a></em>
                                        <em><a class="delete" href="{site_url u="hr/department_delete/"|cat:$children_secrot.uid}">删除</a></em>
                                    </div>
                                    <div class="hide">
                                        <input class="sector_uid" type="hidden" value="{$children_secrot.uid}" />
                                        <dl class="staff_sortable">
                                            {if isset($sector_user[$sector.uid]) && !empty($sector_user[$sector.uid])}
                                                {foreach $sector_user[$sector.uid] as $k=>$v}
                                                    <dt>
                                                        <input class="user_sector" name="user_sector[{$v.uid}][sector]" type="hidden" value="{$sector.uid}" />
                                                        {$v.truename}
                                                    </dt>
                                                {/foreach}
                                            {else}
                                                <dt class="default_department">暂无成员</dt>
                                            {/if}
                                        </dl>
                                    </div>
                                 </li>
                                {/foreach}
                            </ul>
                        {/if}
                    </li>
                    {/foreach}
                    <div class="clear"></div>
                </ul>
                </form>
                <form id="department_form" action="{site_url u="hr/department_add/"}" enctype="application/x-www-form-urlencoded" method="post">
                <p class="add">
                    <input name="name" type="text" class="txt validate[required]"/>
                    <input type="submit" value="添加部门" class="btn"/>
                </p>
                </form>
                <p class="unadd"><strong>未分配员工</strong></p>
                <ul>
                    <li>
                        <dl id="all_staff_sortable" class="unadd">
                            {if !empty($nosector_user)}
                                {foreach $nosector_user as $value}
                                    <dt>
                                        <input class="user_sector" name="user_sector[{$value.uid}][sector]" type="hidden" value="0" />
                                        {$value.truename}
                                    </dt>
                                {/foreach}
                            {else}
                                <dt class="default_department">暂无员工</dt>
                            {/if}
                        </dl>
                    </li>
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
        <div class="bottom">
            <p>　　</p>
        </div>
    </div>
{include file="public/footer.tpl"}