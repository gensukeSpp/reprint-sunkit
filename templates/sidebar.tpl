{assign var="cmt_p" value="<!--"}
{assign var="cmt_n" value="-->"}

<div id="sub">

<!--<h3 class="menu"><p>メニュー</p></h3>-->

<ul class="c mb1em">

{foreach from=$outer item=value_o}
	{if $ttl eq $value_o.menu}
		{$cmt_p}
		<li><p><a {$value_o.link}>{$value_o.menu}</a></p>
		{$cmt_n}
	{else}
		<li><p><a {$value_o.link}>{$value_o.menu}</a></p>
		{if $value_o.link eq 'id=\"products\"'}
			<ul class="pside" style="display: none;">
			{foreach from=$inner item=value_i}
				<li><a href="./products.php?tab={$value_i.num}">{$value_i.menu}</a></li>
			{/foreach}
			</ul>
		{/if}
		</li>
	{/if}
	{continue}
{/foreach}
</ul>
{if $ttl eq "トップページ"}
	{include file='side_lineup.tpl'}
{/if}
</div><!--/sub-->
