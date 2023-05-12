<?php

require_once('dir_base_www.php');

$smarty->assign( 'ttl', '商品情報');
$smarty->assign( 'outer', $outer);
$smarty->assign( 'inner', $inner);

$smarty->debugging = false;
$smarty->display( 'products_base.tpl' );

?> 
