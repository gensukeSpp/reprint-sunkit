<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once('new_menu.php');

// 1
$smarty = new Smarty();

// 2
$smarty->template_dir = __DIR__ . '/templates/';
$smarty->compile_dir = __DIR__ . '/templates_c/';
?>