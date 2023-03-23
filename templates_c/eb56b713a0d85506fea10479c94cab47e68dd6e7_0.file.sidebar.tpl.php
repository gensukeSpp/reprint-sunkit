<?php
/* Smarty version 4.3.0, created on 2023-03-09 02:40:22
  from '/var/www/html/templates/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_640947161677e0_04484682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb56b713a0d85506fea10479c94cab47e68dd6e7' => 
    array (
      0 => '/var/www/html/templates/sidebar.tpl',
      1 => 1678153365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:side_lineup.tpl' => 1,
  ),
),false)) {
function content_640947161677e0_04484682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('cmt_p', "<!--");
$_smarty_tpl->_assignInScope('cmt_n', "-->");?>

<div id="sub">

<!--<h3 class="menu"><p>メニュー</p></h3>-->

<ul class="c mb1em">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['outer']->value, 'value_o');
$_smarty_tpl->tpl_vars['value_o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value_o']->value) {
$_smarty_tpl->tpl_vars['value_o']->do_else = false;
?>
	<?php if ($_smarty_tpl->tpl_vars['ttl']->value == $_smarty_tpl->tpl_vars['value_o']->value['menu']) {?>
		<?php echo $_smarty_tpl->tpl_vars['cmt_p']->value;?>

		<li><p><a <?php echo $_smarty_tpl->tpl_vars['value_o']->value['link'];?>
><?php echo $_smarty_tpl->tpl_vars['value_o']->value['menu'];?>
</a></p>
		<?php echo $_smarty_tpl->tpl_vars['cmt_n']->value;?>

	<?php } else { ?>
		<li><p><a <?php echo $_smarty_tpl->tpl_vars['value_o']->value['link'];?>
><?php echo $_smarty_tpl->tpl_vars['value_o']->value['menu'];?>
</a></p>
		<?php if ($_smarty_tpl->tpl_vars['value_o']->value['link'] == 'id=\"products\"') {?>
			<ul class="pside" style="display: none;">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inner']->value, 'value_i');
$_smarty_tpl->tpl_vars['value_i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value_i']->value) {
$_smarty_tpl->tpl_vars['value_i']->do_else = false;
?>
				<li><a href="./products.php?tab=<?php echo $_smarty_tpl->tpl_vars['value_i']->value['num'];?>
"><?php echo $_smarty_tpl->tpl_vars['value_i']->value['menu'];?>
</a></li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
		</li>
	<?php }?>
	<?php continue 1;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php if ($_smarty_tpl->tpl_vars['ttl']->value == "トップページ") {?>
	<?php $_smarty_tpl->_subTemplateRender('file:side_lineup.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
</div><!--/sub-->
<?php }
}
