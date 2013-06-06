<div class="menu">
    <ul>
        {foreach $menu as $key=>$value}
        <li>
            <h2 {if $value['#current'] } class="current" {/if} ><a href="javascript:void(0);" class="{$value['#class']}"><span  {if $value['#current'] } class="plus" {else} class="minus" {/if}>{$value['#title']}</span></a></h2>
            <p {if $value['#current'] } class="display" {/if}>
                {foreach $value.level1 as $k=>$v}
                    <a href="{site_url u=$key|cat:'/'|cat:$k}" {if $v['#current'] } class="current" {/if}>{$v['#title']}</a>
                {/foreach}
            </p>
        </li>
        {/foreach}
    </ul>
    <div class="clear"></div>
</div>