<?php

require_once('select_req.php');

$smarty->assign( 'ttl', 'おススメ商品');
$smarty->assign( 'outer', $outer);
$smarty->assign( 'inner', $inner);

$smarty->debugging = false;
$smarty->display( 'recommend.tpl' );

?> 
