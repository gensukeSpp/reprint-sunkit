<?php

require_once('select_req.php');

$smarty->assign( 'ttl', 'トップページ');
$smarty->assign( 'outer', $outer);
$smarty->assign( 'inner', $inner);
$smarty->assign( 'categories', $items);

// $smarty->escape_html = true;

$smarty->debugging = false;
$smarty->display( 'index.tpl' );

?> 
