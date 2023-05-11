<?php

	require_once __DIR__ . '/select_req.php';

	$smarty->assign( 'ttl', 'トップページ');
	$smarty->assign( 'outer', $outer);
	$smarty->assign( 'inner', $inner);
	$smarty->assign( 'categories', $items);

	$smarty->escape_html = true;

	$smarty->debugging = true;	
	$smarty->display( 'index.tpl' );

?> 
