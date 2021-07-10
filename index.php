<?php 
	
	error_reporting(E_ALL);
	setlocale(LC_ALL, 'tr_TR');
	header("Content-Type: text/html; charset=utf-8");

	date_default_timezone_set('Europe/Istanbul');
	
	if (session_status() !== PHP_SESSION_ACTIVE) {
		
		session_start();
		
		ob_start();
		
			include_once 'section.php';								
										
		ob_end_flush();
		
	}


		
?>