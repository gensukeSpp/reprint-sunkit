<?php
/* Smarty version 4.3.0, created on 2023-03-09 02:40:21
  from '/var/www/html/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_640947157212f1_67556201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88dbf58bd600aa27802129682ad443d483d9dea4' => 
    array (
      0 => '/var/www/html/templates/header.tpl',
      1 => 1678153364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640947157212f1_67556201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2063351331640947156411e8_47761084', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174856972764094715719895_82651734', 'favicon');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12101230926409471571a6e6_20082279', 'style');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1164273036409471571b4a9_16294406', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'header_base.tpl');
}
/* {block 'title'} */
class Block_2063351331640947156411e8_47761084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2063351331640947156411e8_47761084',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['ttl']->value;
}
}
/* {/block 'title'} */
/* {block 'favicon'} */
class Block_174856972764094715719895_82651734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'favicon' => 
  array (
    0 => 'Block_174856972764094715719895_82651734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="shortcut icon" href="./images/favicon(1).ico">
<?php
}
}
/* {/block 'favicon'} */
/* {block 'style'} */
class Block_12101230926409471571a6e6_20082279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_12101230926409471571a6e6_20082279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="./style/style.css" type="text/css">
<?php
}
}
/* {/block 'style'} */
/* {block 'script'} */
class Block_1164273036409471571b4a9_16294406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1164273036409471571b4a9_16294406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!--all--><?php echo '<script'; ?>
 type="text/javascript" src="./js/jquery-2.2.2.min.js"><?php echo '</script'; ?>
>
<!--all--><?php echo '<script'; ?>
 type="text/javascript" src="./js/jquery.data_send.v2.js"><?php echo '</script'; ?>
>
<!--sidebar--><?php echo '<script'; ?>
 type="text/javascript" src="./js/jquery.justify.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
//<!--sidebar--><!--script type="text/javascript" src="./js/justify.js"><?php echo '</script'; ?>
-->
/* 
 * メニューの均等ぞろえ
 * プラグインファイルjquery.justify.jsのjustify関数を使用
 */
$(document).ready(function(){
    $("ul.c.mb1em li p a").justify();
});

//<!--sidebar--><!--script type="text/javascript" src="./js/pslide.js"><?php echo '</script'; ?>
-->
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
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['ttl']->value == 'トップページ') {?>
<!--index--><?php echo '<script'; ?>
 type="text/javascript" src="./js/script.js"><?php echo '</script'; ?>
>
<!--index<?php echo '<script'; ?>
 type="text/javascript" src="./js/rollimg.js"><?php echo '</script'; ?>
>-->
<!--index--><?php echo '<script'; ?>
 type="text/javascript" src="./js/get_source.evt.js"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['ttl']->value == '商品情報') {?>
<!--multiple(products & recommend)--><?php echo '<script'; ?>
 type="text/javascript" src="./js/singletonSetTag.js"><?php echo '</script'; ?>
>
<!--products--><?php echo '<script'; ?>
 type="text/javascript" src="./js/layerModalFade.js"><?php echo '</script'; ?>
>
<!--products--><?php echo '<script'; ?>
 type="text/javascript" src="./js/call_layer.js"><?php echo '</script'; ?>
>
<!--products--><?php echo '<script'; ?>
 type="text/javascript" src="./js/tab.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
//<!--products--><!--script type="text/javascript" src="./js/bkg_resize.js"><?php echo '</script'; ?>
-->
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

//<!--products--><!--script type="text/javascript" src="./js/jump_trigger.js"><?php echo '</script'; ?>
-->
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

//<!--products--><!--script type="text/javascript" src="./js/fade_bottom.js"><?php echo '</script'; ?>
-->
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
<?php echo '</script'; ?>
>

<?php } elseif ($_smarty_tpl->tpl_vars['ttl']->value == 'お問い合わせ') {
echo '<script'; ?>
>
//<!--contact--><!--script type="text/javascript" src="./js/reset.js"><?php echo '</script'; ?>
-->
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
<?php echo '</script'; ?>
>

<?php } elseif ($_smarty_tpl->tpl_vars['ttl']->value == 'おススメ商品') {?>
<!--multiple(products & recommend)--><?php echo '<script'; ?>
 type="text/javascript" src="./js/singletonSetTag.js"><?php echo '</script'; ?>
>
<!--recommend--><?php echo '<script'; ?>
 type="text/javascript" src="./js/recommendFade.js"><?php echo '</script'; ?>
>
<!--recommend--><?php echo '<script'; ?>
 type="text/javascript" src="./js/call_recommend.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
//<!--recommend--><!--script type="text/javascript" src="./js/checkoff.js"><?php echo '</script'; ?>
-->
/* チェックボックスのチェックをすべてクリアにする */
$(function(){
	$('#c_btn').on("click", function(){
		$("input:checkbox").attr("checked", false); 
		$("div.rpl").replaceWith("");
	});
})
<?php echo '</script'; ?>
>

<?php }
}
}
/* {/block 'script'} */
}
