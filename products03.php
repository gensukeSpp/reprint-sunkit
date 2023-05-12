<?php
ini_set( 'display_errors', 1 );
//define( 'SMARTY_DIR', '/usr/local/lib/Smarty-2.6.18/libs/' );
// define( 'SMARTY_DIR', 'C:/Program Files/Smarty/libs/' );
// define( 'SMARTY_DIR', __DIR__ . '/vendor/smarty/smarty/libs/');
// require_once( SMARTY_DIR .'Smarty.class.php' );
// require_once('menu_base.php');
require_once __DIR__ . '/new_menu.php';

// $smarty = new Smarty();

$smarty->template_dir = __DIR__ . '/templates';
$smarty->compile_dir = __DIR__ . '/templates_c';

// $smarty->template_dir = 'C:/Users/user/workspace/smart_sk/app/templates/';
// $smarty->compile_dir  = 'C:/Users/user/workspace/smart_sk/app/templates_c/';
// $smarty->config_dir   = 'C:/Users/user/workspace/smart_sk/app/configs/';
// $smarty->cache_dir    = 'C:/Users/user/workspace/smart_sk/app/cache/';

$smarty->assign( 'ttl', '商品情報（除菌・消臭剤）');
//$smarty->assign( 'outer', $outer);
//$smarty->assign( 'inner', $inner);
$smarty->assign('cdd', $class_dd);

$smarty->debugging = false;
$smarty->display( 'products03.tpl' );

?> 
