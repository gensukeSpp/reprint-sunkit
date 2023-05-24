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

    $smarty->assign( 'ttl', '商品情報（菓子）');
    //$smarty->assign( 'outer', $outer);
    //$smarty->assign( 'inner', $inner);
    $smarty->assign('cs', $class_s);

    $smarty->debugging = false;
    $smarty->display( 'products02.tpl' );

?> 
