<?php
	require_once 'router.php';
	require_once 'database.php';
	$conf = [];
	$conf['conf'] = require 'config.php';
	$conf['database'] = new Query(
	    connect::make($conf['conf']['database'])
	);
?>
