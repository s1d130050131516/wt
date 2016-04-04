<?php

session_start();

if (!isset($_SESSION['id'])) {
	header('Location: http://localhost/wt/12/login.php');
	exit;
} else {

	if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		// EDIT PROFILE

		include('connectivity.php');

		$results = query("SELECT * FROM users WHERE id = " . $_SESSION['id'], true);
		$u = $results[0];

		include('templates/edit.php');
		exit;
	} else {

		// SAVE CHANGES
		$SQL = "UPDATE users SET email = '" . $_POST['email'] . "', name = '" . $_POST['name'] . "', phone = '" . $_POST['phone'] . "', city = '" . $_POST['city'] . "', birthday = '" . $_POST['birthday'] . "', pincode = '" . $_POST['pincode'] . "' WHERE id = " . $_SESSION['id'];

		include('connectivity.php');
		$results = query($SQL);
		if ($results == 1) {
			header('Location: http://localhost/wt/12');
		} else {
			echo "There was an error while updating!";
		}

	}

}

?>