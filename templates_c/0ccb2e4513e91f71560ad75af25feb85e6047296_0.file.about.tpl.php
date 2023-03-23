<?php
/* Smarty version 4.3.0, created on 2023-03-09 02:40:20
  from '/var/www/html/templates/about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64094714dd9693_39220009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ccb2e4513e91f71560ad75af25feb85e6047296' => 
    array (
      0 => '/var/www/html/templates/about.tpl',
      1 => 1678153364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64094714dd9693_39220009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24245817764094714dd53c6_13949460', 'head_area');
?>

  <div id="frame-top"></div>
  
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132605125164094714dd8689_62227232', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'content_base.tpl');
}
/* {block 'head_area'} */
class Block_24245817764094714dd53c6_13949460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_area' => 
  array (
    0 => 'Block_24245817764094714dd53c6_13949460',
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
class Block_132605125164094714dd8689_62227232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_132605125164094714dd8689_62227232',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!--<div id="hello">
  <div id="frame-top"></div>
<h2>ごあいさつ</h2>
<img src="./about_files/s_1066g.gif" class="ceo" alt=""><span id="k-title">代表取締役　小浅　雅樹</span>
<p>という部分がありますので、テキストをサイトの説明文に入れ替えます。検索結果の文面に使われる場合もありますので、見た人が来訪したくなるような説明文を簡潔に書きましょう。ＳＥＯ対策もするなら冒頭に重要なワードを入れておきましょう。ブリーダー・ペットショップ向け 無料ホームページテンプレート。ここはサイトに関係のあるキーワードを入れる箇所です。ここはサイトに関係のあるキーワードを入れる箇所です。</p>
</div>-->

  <div id="frame-top"></div>
<h2>商　号</h2>
<p>株式会社サンキット北海道</p>
  <!--<div id="frame-bottom"></div>-->

  <div id="frame-top"></div>
<h2>設　立</h2>
<p>平成26年5月</p>
  <!--<div id="frame-bottom"></div>-->

<!--
<h2>資本金</h2>
<p>100万円</p>
-->

  <div id="frame-top"></div>
<h2>役　員</h2>
<p>代表取締役　小浅　雅樹</p>
  <!--<div id="frame-bottom"></div>-->

  <div id="frame-top"></div>
<h2 id="adr" name="adr">所在地</h2>

<div id="address">
<p>
<strong class="color1">■本社事業所</strong>
  </p>
  <ul><li>〒065-0033　札幌市東区北３３条東８丁目４番１０号</li>
<li>Tel: 011-702-0250 Fax: 011-351-5705</li>
<!--<li>Tel: Fax: 現在変更手続き中です。</li>-->
    <!--</ul><li>〒003-0027　札幌市白石区本通４丁目北１番４号　コンチエルト白石１０７号</li>
<li>Tel: 011-876-0760 Fax: 011-351-5705</li>
    </ul>--><br>
<p><strong class="color1">■小樽事業所</strong></p><ul>
  <li>〒047-0023　小樽市最上１丁目２４－１０</li>
  <li>Tel:0134-64-5303 Fax:0134-64-5305</li>
</ul>
<br>
</div><!--/address-->

  <div id="frame-bottom"></div>

<?php
}
}
/* {/block 'main'} */
}
