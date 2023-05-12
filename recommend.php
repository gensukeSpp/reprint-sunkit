<?php

require_once('dir_base_www.php');

$smarty->assign( 'ttl', 'おススメ商品');
$smarty->assign( 'outer', $outer);
$smarty->assign( 'inner', $inner);

$smarty->debugging = false;
$smarty->display( 'recommend.tpl' );

?> 
