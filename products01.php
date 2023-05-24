<?php

    ini_set( 'display_errors', 1 );
    // define( 'SMARTY_DIR', __DIR__ . '/vendor/smarty/smarty/libs/');
    // require_once( SMARTY_DIR .'Smarty.class.php' );
	define( 'SMARTY_DIR', __DIR__ . '/lib/smarty-3.1.30/libs/' );
	require_once SMARTY_DIR . 'Smarty.class.php';

    require_once('new_menu.php');
    // require_once __DIR__ . '/new_menu.php';

    $smarty = new Smarty();

    $smarty
        ->setTemplateDir('gs://reprint-sunkit.appspot.com/templates')
        ->setCompileDir('gs://reprint-sunkit.appspot.com/templates_c');

    $smarty->assign( 'ttl', '商品情報（機能性食品）');
    //$smarty->assign( 'outer', $outer);
    //$smarty->assign( 'inner', $inner);
    $smarty->assign('cf', $class_f);

    $smarty->debugging = true;
    $smarty->display( 'products01.tpl' );

?> 
