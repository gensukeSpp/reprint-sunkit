<footer>
	<div class="fbg">
<ul class="c foot">
	{foreach from=$outer item="value_o"}
		{if $value_o.link eq "id=\"products\""}
			<li><a href="./products.php?tab=F">{$value_o.menu}</a></li>
		{else}
			<li><a {$value_o.link}>{$value_o.menu}</a></li>
		{/if}
		{continue}
	{/foreach}
</ul>
{if $ttl eq "トップページ"}
	<div class="tail">こちらのホームページは、就労継続支援Ａ型事業所 <a href="http://www.fun-creation.co.jp/" target="_blank">株式会社ファンクリエイション</a>が制作したものです。</div>
{/if}
<div class="pr"><a href="http://template-party.com/" target="_blank">Web Design:Template-Party</a></div>
</div><!--/.fbg-->
</footer><!--/footer-->
