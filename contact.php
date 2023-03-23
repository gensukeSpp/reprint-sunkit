<?php

require_once('select_req.php');

$smarty->assign( 'ttl', 'お問い合わせ');
$smarty->assign( 'outer', $outer);
$smarty->assign( 'inner', $inner);

$smarty->debugging = false;
$smarty->display( 'contact.tpl' );

?> 
