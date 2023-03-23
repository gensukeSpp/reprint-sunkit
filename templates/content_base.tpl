<!DOCTYPE html>
<html>
{include file="header.tpl"}
<body>
<div id="container">
	
<header>
	<div class="hlg">
	<a href="./index.php"></a>
	</div>
{block name=head_area}
	  <p>株式会社サンキット北海道</p>
{/block}	
</header><!--/header-->

	<div id="head-border"></div>

<div id="contents">
	
<div id="main">
{* コンテンツ挿入部分 *}
{block name=main}{/block}
</div>
<!--/main-->

{include file="sidebar.tpl"}
</div><!--/contents-->

<!--<div id="fromsub">
	<form action=""><input type="hidden" name="id" value=""></form>
</div>-->
<!--<div id="fromsub" data-jump=""></div>-->

	<div id="footer-border"></div>
	
{include file="footer.tpl"}
</div>
<!--/container-->
{if $ttl eq "トップページ"}
	<script type="text/javascript" src="./js/rollimg.js"></script>
{/if}

{if $ttl eq "商品情報"}
	<div id="pt">
	<div id="page-top">
	   <p><a id="move-page-top">▲</a></p>
	</div>
	</div>
{/if}

</body>
</html>
