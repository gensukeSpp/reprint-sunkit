<?php
/* Smarty version 4.3.0, created on 2023-03-09 02:40:22
  from '/var/www/html/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64094716598db0_85165503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '735e3a42e81b5e6fff7cf16f8560ec5ba6056c14' => 
    array (
      0 => '/var/www/html/templates/footer.tpl',
      1 => 1678153364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64094716598db0_85165503 (Smarty_Internal_Template $_smarty_tpl) {
?><footer>
	<div class="fbg">
<ul class="c foot">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['outer']->value, 'value_o');
$_smarty_tpl->tpl_vars['value_o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value_o']->value) {
$_smarty_tpl->tpl_vars['value_o']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['value_o']->value['link'] == "id=\"products\"") {?>
			<li><a href="./products.php?tab=F"><?php echo $_smarty_tpl->tpl_vars['value_o']->value['menu'];?>
</a></li>
		<?php } else { ?>
			<li><a <?php echo $_smarty_tpl->tpl_vars['value_o']->value['link'];?>
><?php echo $_smarty_tpl->tpl_vars['value_o']->value['menu'];?>
</a></li>
		<?php }?>
		<?php continue 1;?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php if ($_smarty_tpl->tpl_vars['ttl']->value == "トップページ") {?>
	<div class="tail">こちらのホームページは、就労継続支援Ａ型事業所 <a href="http://www.fun-creation.co.jp/" target="_blank">株式会社ファンクリエイション</a>が制作したものです。</div>
<?php }?>
<div class="pr"><a href="http://template-party.com/" target="_blank">Web Design:Template-Party</a></div>
</div><!--/.fbg-->
</footer><!--/footer-->
<?php }
}
