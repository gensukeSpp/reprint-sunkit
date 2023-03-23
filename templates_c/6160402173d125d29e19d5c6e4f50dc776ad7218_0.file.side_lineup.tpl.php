<?php
/* Smarty version 4.3.0, created on 2023-03-13 01:18:09
  from '/var/www/html/templates/side_lineup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_640e79d12377e5_98212672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6160402173d125d29e19d5c6e4f50dc776ad7218' => 
    array (
      0 => '/var/www/html/templates/side_lineup.tpl',
      1 => 1678153365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640e79d12377e5_98212672 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="fb-img">
<a href="https://www.facebook.com/sunkithokkaido" target="_blank"></a>
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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'outer');
$_smarty_tpl->tpl_vars['outer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['outer']->value) {
$_smarty_tpl->tpl_vars['outer']->do_else = false;
?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['outer']->value, 'i', false, 'k');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
		<!--<li><div id="plst" data-jump=<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['goods']->value['name'];?>
</div></li>-->
		<li><div id="plst" data-jump=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</div></li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div><!--/lineup-->
<?php }
}
