<?php
/* Smarty version 4.3.0, created on 2023-03-09 02:42:12
  from '/var/www/html/templates/buy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64094784ae3e19_89240136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8da00c1c66e7d61326380e7f40e2db2469ccc466' => 
    array (
      0 => '/var/www/html/templates/buy.tpl',
      1 => 1678153364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64094784ae3e19_89240136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151078011564094784ae0909_39023260', 'head_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7298633564094784ae3128_74560970', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'content_base.tpl');
}
/* {block 'head_area'} */
class Block_151078011564094784ae0909_39023260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_area' => 
  array (
    0 => 'Block_151078011564094784ae0909_39023260',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'head_area'} */
/* {block 'main'} */
class Block_7298633564094784ae3128_74560970 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_7298633564094784ae3128_74560970',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="frame-top"></div>
<h2>お買い物方法</h2><br>
  <!--<p>現在準備中です。<br>お急ぎの方はお問い合わせページより、メールにて問い合わせを承っております。</p>-->
	<p>下記のリンクより、商品をご購入いただけます（クレジット決済です）。<br>また、お問い合わせページより、フォームからも問い合わせを承っております。</p>
  <!--<div id="frame-bottom"></div>-->

<p><strong>『ご購入サイト』</strong></p>
<p><a href="https://sunkithokkaido.stores.jp/" target="_blank">https://sunkithokkaido.stores.jp/</a></p>

  <div id="frame-top"></div>
<h2>お振込先</h2>
<p><strong>主要取引銀行</strong>　：　北海道銀行白石支店</p>
<p class="indt"><strong>お支払口座</strong>　：　北海道銀行　白石支店（普通）１３６１５７４<br>
カ）サンキットホッカイドウ</p>
<p><strong>お取引条件</strong>　：　別途ご相談させて頂きます。</p>

  <div id="frame-bottom"></div>

<?php
}
}
/* {/block 'main'} */
}
