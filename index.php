<?php

	require_once('dir_base_www.php');

	$smarty->assign( 'ttl', 'トップページ');
	$smarty->assign( 'outer', $outer);
	$smarty->assign( 'inner', $inner);
	$smarty->assign( 'categories', $items);

	// $smarty->escape_html = true;

	$smarty->debugging = true;
	$smarty->display( 'index.tpl' );

?> 
