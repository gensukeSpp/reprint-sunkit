<?php

require_once __DIR__ . '/select_req.php';

$smarty->assign( 'ttl', '商品情報');
$smarty->assign( 'outer', $outer);
$smarty->assign( 'inner', $inner);

$smarty->debugging = false;
$smarty->display( 'products_base.tpl' );

?> 
