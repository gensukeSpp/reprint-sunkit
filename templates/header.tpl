{extends file='header_base.tpl'}

{block name=title prepend}{$ttl}{/block}

{block name=favicon}
<link rel="shortcut icon" href="./images/favicon(1).ico">
{/block}
{block name=style}
<link rel="stylesheet" href="./style/style.css" type="text/css">
{/block}
{block name=script}
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<!--all--><script type="text/javascript" src="./js/jquery.data_send.v2.js"></script>
<!--sidebar--><script type="text/javascript" src="./js/jquery.justify.js"></script>
<script>
//<!--sidebar--><!--script type="text/javascript" src="./js/justify.js"></script-->
/* 
 * メニューの均等ぞろえ
 * プラグインファイルjquery.justify.jsのjustify関数を使用
 */
$(document).ready(function(){
    $("ul.c.mb1em li p a").justify();
});

//<!--sidebar--><!--script type="text/javascript" src="./js/pslide.js"></script-->
/* メニューをホバーした際、子メニューを表示 */
$(function(){
	$("ul.c.mb1em > li").hover(
		function() {
			/*
			 * :not(:animated)
			 * ホバーした際、アニメーションが起きていない要素、もしくは終了した要素のみスライド
			 */
			$("ul.pside:not(:animated)", this).slideDown(500);
		},
		function() {
			$("ul.pside", this).slideUp(300);
		}
	);
});
</script>

{if $ttl eq 'トップページ'}
<!--index--><script type="text/javascript" src="./js/script.js"></script>
<!--index<script type="text/javascript" src="./js/rollimg.js"></script>-->
<!--index--><script type="text/javascript" src="./js/get_source.evt.js"></script>
{*elseif $ttl eq '商品情報' || 'おススメ商品'*}
{elseif $ttl eq '商品情報'}
<!--multiple(products & recommend)--><script type="text/javascript" src="./js/singletonSetTag.js"></script>
<!--products--><script type="text/javascript" src="./js/layerModalFade.js"></script>
<!--products--><script type="text/javascript" src="./js/call_layer.js"></script>
<!--products--><script type="text/javascript" src="./js/tab.js"></script>
<script>
//<!--products--><!--script type="text/javascript" src="./js/bkg_resize.js"></script-->
/*
 * 商品数に応じて背景スタイルの高さを調整
 */
/* HTMLの読み込みが完了してから実行 */
window.onload = function(){
	var h = getTabHeight();
	$('.category').css("height", h + "px");
	/* タブをクリックした際も同様の動作 */
	$("#tab li a").on('click', function(){
		$('.category').css("height", "");
		var h = getTabHeight();
		$('.category').css("height", h + "px");
	});
}

/* class="category"の高さを算出する関数 */
function getTabHeight(){
	var tab_pg = location.hash;
	var y = $(".category").filter(tab_pg).height();
	return y;
}

//<!--products--><!--script type="text/javascript" src="./js/jump_trigger.js"></script-->
/*
 * 商品情報ページの個別の商品までアニメーションで移動
 * 
 * トップページのsendData()により、div#trgの子要素のdata-scroll属性に値が受け取られる
 */
window.onload = function(){
	var n = $("#trg").children().data('scroll');
	if(n){
		if ($("div#" + n).length) {
			var p = $("div#" + n).offset().top;
			/* data-scroll属性の値までアニメーション移動 */
			$('html, body').animate({ scrollTop: p}, 'slow');
		}
	}
}

//<!--products--><!--script type="text/javascript" src="./js/fade_bottom.js"></script-->
/* ページトップにスクロールする */
$(function(){
	$(window).scroll(function(){
		var now = $(window).scrollTop();

		/* 高さ1500px以上でページトップボタンが出現 */
		if(now > 1500){
			$("#page-top").fadeIn("slow");
		}else{
			$("#page-top").fadeOut("slow");
		}
	});
	/* ページトップボタンクリック時の動作 */
	$('#move-page-top').on("click", function(){
		$('html, body').animate({ scrollTop: 0}, 'slow');
	})
})
</script>

{elseif $ttl eq 'お問い合わせ'}
<script>
//<!--contact--><!--script type="text/javascript" src="./js/reset.js"></script-->
/*
 * お問い合わせページ 
 * リセットボタンクリックで入力項目をすべてクリア
 */
$(".r_btn").on("click", function(){
	$('form')[0].reset();
})

function reset(){
	/* テキストエリア・テキスト・セレクトボックスを対象に */
	find("textarea, :text, select").val("");
}
</script>

{elseif $ttl eq 'おススメ商品'}
<!--multiple(products & recommend)--><script type="text/javascript" src="./js/singletonSetTag.js"></script>
<!--recommend--><script type="text/javascript" src="./js/recommendFade.js"></script>
<!--recommend--><script type="text/javascript" src="./js/call_recommend.js"></script>
<script>
//<!--recommend--><!--script type="text/javascript" src="./js/checkoff.js"></script-->
/* チェックボックスのチェックをすべてクリアにする */
$(function(){
	$('#c_btn').on("click", function(){
		$("input:checkbox").attr("checked", false); 
		$("div.rpl").replaceWith("");
	});
})
</script>

{/if}
{/block}
