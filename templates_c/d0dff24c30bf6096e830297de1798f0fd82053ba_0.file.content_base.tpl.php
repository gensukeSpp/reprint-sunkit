<?php
/* Smarty version 4.3.0, created on 2023-03-09 02:40:21
  from '/var/www/html/templates/content_base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6409471547aa67_27977838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0dff24c30bf6096e830297de1798f0fd82053ba' => 
    array (
      0 => '/var/www/html/templates/content_base.tpl',
      1 => 1678153364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6409471547aa67_27977838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
<div id="container">
	
<header>
	<div class="hlg">
	<a href="./index.php"></a>
	</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37648356640947153c30b0_39899389', 'head_area');
?>
	
</header><!--/header-->

	<div id="head-border"></div>

<div id="contents">
	
<div id="main">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1304084587640947153c42b3_02777946', 'main');
?>

</div>
<!--/main-->

<?php $_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div><!--/contents-->

<!--<div id="fromsub">
	<form action=""><input type="hidden" name="id" value=""></form>
</div>-->
<!--<div id="fromsub" data-jump=""></div>-->

	<div id="footer-border"></div>
	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<!--/container-->
<?php if ($_smarty_tpl->tpl_vars['ttl']->value == "トップページ") {?>
	<?php echo '<script'; ?>
 type="text/javascript" src="./js/rollimg.js"><?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ttl']->value == "商品情報") {?>
	<div id="pt">
	<div id="page-top">
	   <p><a id="move-page-top">▲</a></p>
	</div>
	</div>
<?php }?>

</body>
</html>
<?php }
/* {block 'head_area'} */
class Block_37648356640947153c30b0_39899389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_area' => 
  array (
    0 => 'Block_37648356640947153c30b0_39899389',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  <p>株式会社サンキット北海道</p>
<?php
}
}
/* {/block 'head_area'} */
/* {block 'main'} */
class Block_1304084587640947153c42b3_02777946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1304084587640947153c42b3_02777946',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
