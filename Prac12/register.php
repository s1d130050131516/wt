<?php


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

	// Redirect if user is already logged in
	session_start();
	if (isset($_SESSION['id'])) {
		header('Location: http://localhost/wt/12/');
		exit;
	} else {
		// Display the registration form otherwise
		include('templates/register.php');
		exit;
	}

} else {

	include('connectivity.php');

	$SQL = "INSERT INTO users (name, email, password, city, birthday, pincode, phone) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . password_hash($_POST['password'], PASSWORD_DEFAULT) . "', '" . $_POST['city'] . "', '" . $_POST{'birthday'} . "', '" . $_POST['pincode'] . "', '" . $_POST['phone'] . "')";

	if (query($SQL)) {
		header('Location: http://localhost/wt/12/login.php');
	}
}

?>