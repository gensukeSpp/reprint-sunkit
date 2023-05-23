<div class="fb-img">
<a href="#" target="_blank"><img src="../images/fb_sk.png" alt="facebookリンクのバナー"></a>
</div><!--/fb-img-->
<div class="chk">
<a href="./recommend.php"></a>
</div><!--/chk-->
<h3 class="text">商品一覧</h3>
<div class="lineup">
<!--<a href="javascript:void(0);" class="showf">クリックしてください</a>
<div class="finger"></div>-->
<!--<p>
  準備中．．．
</p>-->
<ul>
{foreach item=outer from=$categories}
	{foreach key=k item=i from=$outer}
		<!--<li><div id="plst" data-jump={$goods.id}>{$goods.name}</div></li>-->
		<li><div id="plst" data-jump={$i.id}>{$i.name}</div></li>
	{/foreach}
{/foreach}
</ul>
</div><!--/lineup-->
