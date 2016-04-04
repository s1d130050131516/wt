<?php

session_start();

if (!isset($_SESSION['id'])) {
	include('templates/nosession.php');
	exit;
} else {
	include('templates/session.php');
	exit;
}

?>