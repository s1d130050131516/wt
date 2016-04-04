<?php


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

	// Redirect if user is already logged in
	session_start();
	if (isset($_SESSION['id'])) {
		header('Location: http://localhost/wt/12/');
		exit;
	} else {
		// Display the login form otherwise
		include('templates/login.php');
		exit;
	}	
} else {

	include('connectivity.php');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$SQL = "SELECT * FROM users WHERE email = '" . $email . "'";

	$results = query($SQL, true);
	if (count($results) < 1) {
		header('Location: https://localhost/wt/12/register.php');
	}
	else if (password_verify($password, $results[0]['password'])) {
		session_start();
		$_SESSION['id'] = $results[0]['id'];
		header('Location: http://localhost/wt/12');
	} else {
		include('templates/login.php');
	}
}

?>