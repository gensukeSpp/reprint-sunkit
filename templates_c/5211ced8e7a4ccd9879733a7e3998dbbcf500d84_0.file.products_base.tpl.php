<?php
/* Smarty version 4.3.0, created on 2023-03-13 02:31:15
  from '/var/www/html/templates/products_base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_640e8af3c1cf65_64221605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5211ced8e7a4ccd9879733a7e3998dbbcf500d84' => 
    array (
      0 => '/var/www/html/templates/products_base.tpl',
      1 => 1678673628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products01.tpl' => 1,
    'file:products02.tpl' => 1,
    'file:products03.tpl' => 1,
    'file:products06.tpl' => 1,
    'file:products04.tpl' => 1,
    'file:products05.tpl' => 1,
  ),
),false)) {
function content_640e8af3c1cf65_64221605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1879000536640e8af38aa596_80748930', 'head_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1757477763640e8af38ac8f6_48520665', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'content_base.tpl');
}
/* {block 'head_area'} */
class Block_1879000536640e8af38aa596_80748930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_area' => 
  array (
    0 => 'Block_1879000536640e8af38aa596_80748930',
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
class Block_1757477763640e8af38ac8f6_48520665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1757477763640e8af38ac8f6_48520665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<p class="gostore"><a href="https://sunkithokkaido.stores.jp/" target="_blank">こちら</a>から商品をご購入いただけます。</p>
<div class="green-a"></div>

<div id="trg"><div data-scroll="<?php echo $_GET['id'];?>
"></div></div>

<ul id="tab" class="clearfix">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inner']->value, 'value_i');
$_smarty_tpl->tpl_vars['value_i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value_i']->value) {
$_smarty_tpl->tpl_vars['value_i']->do_else = false;
?>
	<li><a href="#tab<?php echo $_smarty_tpl->tpl_vars['value_i']->value['num'];?>
"><?php echo $_smarty_tpl->tpl_vars['value_i']->value['menu'];?>
</a></li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

	
<?php $_smarty_tpl->_subTemplateRender('file:products01.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:products02.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:products03.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:products06.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:products04.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:products05.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div id="frame-bottom"></div>

<?php
}
}
/* {/block 'main'} */
}
