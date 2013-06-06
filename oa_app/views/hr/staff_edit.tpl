{include file="public/head.tpl"}
<div class="warp">
{include file="public/sidebar.tpl"}
    <div class="box">
    <form id="staff_form" method="post" action="{site_url u='hr/staff_save'}">
        <input type="hidden" name="uid" value="{$user_data.uid}" />
    {include file="public/header.tpl"}
        <div class="title">
            <p><span class="power">
            {include file="public/breadcrumbs.tpl"}
            </span>
                <input id="main-submit" type="button" value="保存" class="save" />
            </p>
        </div>
        <div class="main">
            <div class="info">
                <div class="picture"><img src="{base_url u="inc/images/picture.jpg"}" width="154" height="205" alt=""/><a href="#">修改头像</a></div>
                <div class="oneself">
                    <p>
                        <label for="truename">姓　　名：</label>
                        <input id="truename" name="truename" type="text" value="{$user_data.truename}" />
                    </p>
                    <p>
                        <label for="sex">性　　别：</label>
                        <select id="sex" name="sex" >
                            <option value="1" {if $user_data.sex == 1} selected="selected" {/if}>男</option>
                            <option value="0" {if $user_data.sex == 0} selected="selected" {/if}>女</option>
                        </select>
                    </p>
                    <p>
                        <label for="age">年　　龄：</label>
                        <input id="age" name="age" type="text" value="{$user_data.age|default:''}" />
                    </p>
                    <p>
                        <label for="birthday">生　　日：</label>
                        <input id="birthday" name="birthday" type="text" value="{$user_data.birthday|default:''}"/>
                    </p>
                    <p>
                        <label for="educational_background">学　　历：</label>
                        <select name = "educational_background" id="educational_background">
                        {foreach from = $education item = element name="foo"}
                            {if $smarty.foreach.foo.iteration == $user_data.educational_background}
                            <option value="{$smarty.foreach.foo.iteration}" selected="selected">{$element}</option>
                            {else}
                            <option value="{$smarty.foreach.foo.iteration}">{$element}</option>
                            {/if}
                        {/foreach}
                        </select>
                    </p>
                    <p>
                        <label for="specialty">专　　业：</label>
                        <input id="specialty" name="specialty" type="text" {$user_data.specialty|default}/>
                    </p>
                    <p>
                        <label for="is_married">婚姻状态：</label>
                        <select id="is_married" name="is_married">
                            <option vlaue="2" {if $user_data.is_married eq 2}selected="selected"{/if}>未婚</option>
                            <option vlaue="1" {if $user_data.is_married eq 1}selected="selected"{/if}>已婚</option>
                        </select>
                    </p>
                    <p>
                        <label for="phone">手机号码：</label>
                        <input id="phone" name="phone" type="text" value="{$user_data.phone}"/>
                    </p>
                    <p>
                        <label for="idcard">身份证号：</label>
                        <input id="idcard" name="idcard" type="text" value="{$user_data.idcard}"/>
                    </p>
                        <span>
                        <label for="home_address">家庭住址：</label>
                        <input id="home_address" name="home_address" type="text" value="{$user_data.home_address}"/>
                        </span>
                </div>
                <div class="company">
                    <h2>公司相关</h2>
                    <p>
                        <label for="position">部　　门：</label>
                        <select id="position" name="position">
                            {foreach from = $departments item = element}
                                {if $user_data.position == $element.uid}
                                    <option value="{$element.uid}" selected="selected">{$element.name}</option>
                                {else}
                                    <option value="{$element.uid}">{$element.name}</option>
                                {/if}
                            {/foreach}
                        </select>
                    </p>
                    <p>
                        <label for="sector">职　　务：</label>
                        <select id="sector" name="sector">
                            <option value="1">程序员</option>
                        </select>
                    </p>
                    <p>
                        <label for="join_time">入职时间：</label>
                        <input id="join_time" name="join_time" type="text" value="{$user_data.join_time}" />
                    </p>
                    <p>
                        <label for="work_age">工　　龄：</label>
                        <input id="work_age" name="work_age" type="text" value="{$user_data.work_age}"/>
                    </p>
                    <p>
                        <label for="provident_fund">公&nbsp;&nbsp;积&nbsp;&nbsp;金：</label>
                        <select id="provident_fund" name="provident_fund">
                            <option value="2" {if $user_data.is_married eq 2}selected="selected"{/if}>未办理</option>
                            <option value="1" {if $user_data.is_married eq 1}selected="selected"{/if}>已办理</option>
                        </select>
                    </p>
                    <p>
                        <label for="contract">合同状态：</label>
                        <select id="contract" name="contract">
                            <option value="3" {if $user_data.is_married eq 3}selected="selected"{/if}>未签订</option>
                            <option value="2" {if $user_data.is_married eq 2}selected="selected"{/if}>试用期</option>
                            <option value="1" {if $user_data.is_married eq 1}selected="selected"{/if}>已签订</option>
                        </select>
                    </p>
                    <p>
                        <label for="emergency_contact">紧急联系人：</label>
                        <input id="emergency_contact" name="emergency_contact" type="text" value="{$user_data.emergency_contact}"/>
                    </p>
                    <p>
                        <label for="emergency_contact_phone">紧急联系方式：</label>
                        <input id="emergency_contact_phone" name="emergency_contact_phone" type="text" value="{$user_data.emergency_contact_phone}"/>
                    </p>
                        <span>
                        <label for="note">成长记录：</label>
                        <textarea id="note" name="note" cols="" rows="">{$user_data.note}</textarea>
                        </span> </div>
                <div class="clear"></div>
            </div>
        </div>
        </form>
        <div class="bottom">
            <p>　　</p>
        </div>
    </div>
{include file="public/footer.tpl"}