<?php
	session_start();
	require_once 'core/bootstrap.php';
	$get = $conf['database']->db_query_get("select cookie from user");
	foreach ($get as $a) {
		if (isset($_COOKIE['access']) && $_COOKIE['access'] == $a->cookie) {
			$_SESSION['access'] = 1;
		}
	}
	if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
		$router = new route('routes.php');
		require $router->direct(requests::uri());
	} else {
		require 'login.php';
	}
?>
