<?php

	require_once __DIR__ . '/dir_base_www.php';
	// ini_set( 'display_errors', 3 );
	// define( 'SMARTY_DIR', __DIR__ . '/vendor/smarty/smarty/libs/' );
	// require_once __DIR__ . '/vendor/autoload.php';
	// require_once( SMARTY_DIR .'Smarty.class.php' );

	$smarty = new Smarty();

	$smarty->assign( 'ttl', 'トップページ');
	$smarty->assign( 'outer', $outer);
	$smarty->assign( 'inner', $inner);
	$smarty->assign( 'categories', $items);

	$smarty->escape_html = true;

	$smarty->debugging = true;	
	$smarty->display( 'index.tpl' );

?> 
