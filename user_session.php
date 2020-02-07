<?php

if (isset($_SESSION) == false) {
	session_start();
}

if (isset($_SESSION['user_id']) == false) { 
	$_SESSION['user_id'] = -1;
}

if ($_SESSION['user_id'] == -1) 
	include('header.php');

else 
	include('header_client.php');
?>
