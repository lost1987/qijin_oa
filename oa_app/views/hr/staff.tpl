{include file="public/head.tpl"}
<div class="warp">
{include file="public/sidebar.tpl"}
    <div class="box">
    {include file="public/header.tpl"}
        <div class="title">
            <p><span class="power">
            {include file="public/breadcrumbs.tpl"}
            </span>
                <input onclick="location.href = '{site_url u="hr/staff_add/"}'" type="button" value="添加" class="add" />
            </p>
        </div>
        <div class="main">
            <div class="power">
                {if $user_list}
                <p><strong>姓名</strong><strong>操作</strong></p>
                <ul>
                    {foreach $user_list as $user}
                        <li><span class="user">{$user.truename}</span><em><a href="{site_url u="hr/staff_edit/"|cat:$user.uid}">修改</a></em><em><a href="{site_url u="hr/staff_delete/"|cat:$user.uid}">删除</a></em></li>
                    {/foreach}
                    <div class="clear"></div>
                </ul>
                {else}
                    暂无任何员工
                {/if}

            </div>
        </div>
        <div class="bottom">
            <p>　　</p>
        </div>
    </div>
{include file="public/footer.tpl"}