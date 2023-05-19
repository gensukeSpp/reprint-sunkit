<?php

	// require_once __DIR__ . '/vendor/autoload.php';
	ini_set( 'display_errors', 1 );
	define( 'SMARTY_DIR', __DIR__ . '/lib/smarty-3.1.30/libs/' );
	require_once SMARTY_DIR . 'Smarty.class.php';

	// use Google\Cloud\Storage\StorageClient;

    // $auth_key = './iam/reprint-sunkit-f29a541f8c55.json';

    // $storage = new StorageClient([
    //     'projectId' => 'reprint-sunkit',
    //     'keyFile' => json_decode(file_get_contents($auth_key, TRUE), true)
    //  ]);
    // $storage->registerStreamWrapper();

    // $bucket_name = 'reprint-sunkit.appspot.com';
    // $bucket = $storage->bucket($bucket_name);
    // $content = file_get_contents($bucket);

	require_once __DIR__ . '/new_menu.php';

	date_default_timezone_set('Asia/Tokyo');

	$smarty = new Smarty();

	// $bucket_dir = $smarty->getCompileDir();
	// echo "パーミッションは「" . substr( sprintf( '%o', fileperms($bucket_dir)), -4) . "」<br>";
	$smarty
		->setTemplateDir('gs://reprint-sunkit.appspot.com/templates')
		->setCompileDir('gs://reprint-sunkit.appspot.com/templates_c');
	// $smarty->config_dir   = '/configs/';
	// $smarty->setCacheDir(__DIR__ . '/cache');
    // $smarty->compile_dir="gs://reprint-sunkit.appspot.com/templates_c/"; 
    // $smarty->cache_dir="gs://reprint-sunkit.appspot.com/cache/";


?>