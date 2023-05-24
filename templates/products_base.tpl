{extends file='content_base.tpl'}

{block name=head_area prepend}
{/block}

{block name=main}

<p class="gostore"><a href="#" target="_blank">こちら</a>から商品をご購入いただけます。</p>
<div class="green-a"></div>

<div id="trg"><div data-scroll="{$smarty.get.id}"></div></div>

<ul id="tab" class="clearfix">
{foreach from=$inner item="value_i"}
	<li><a href="#tab{$value_i.num}">{$value_i.menu}</a></li>
{/foreach}
</ul>

{*block name=function*}{*/block*}	
{include file='products01.tpl'}

{*block name=snack*}{*/block*}
{include file='products02.tpl'}

{*block name=disinfectant deodrant drug*}{*/block*}
{include file='products03.tpl'}

{*block name=agricultural products*}{*/block*}
{include file='products06.tpl'}

{*block name=cosmetics*}{*/block*}
{include file='products04.tpl'}

{*block name=other foods*}{*/block*}
{include file='products05.tpl'}

  <div id="frame-bottom"></div>

{/block}
{*/main*}
