<?php

require_once('dir_base_www.php');

$smarty->assign( 'ttl', '会社概要');
$smarty->assign( 'outer', $outer);
$smarty->assign( 'inner', $inner);

$smarty->debugging = false;
$smarty->display( 'about.tpl' );

?> 
