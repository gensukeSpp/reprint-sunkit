<?php

require_once('dir_base_www.php');

$smarty->assign( 'ttl', '採用情報');
$smarty->assign( 'outer', $outer);
$smarty->assign( 'inner', $inner);

$smarty->debugging = false;
$smarty->display( 'employment.tpl' );

?> 
