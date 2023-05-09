<?php

	if($_SERVER['SERVER_NAME'] == 'localhost:8085'){
		require_once __DIR__ . '/dir_base_host.php';
	}elseif($_SERVER['SERVER_NAME'] == 'reprint-sunkit.dt.r.appspot.com'){
		require_once __DIR__ . '/dir_base_www.php';
	}
    // elseif($_SERVER['SERVER_NAME'] == 'smart.sunkit'){
	// 	require_once('dir_base_home.php');
	// }
	
?>