<?php

function query ($SQL, $select = false) {
	static $CONFIG = [
		'server' => 'localhost',
		'username' => 'root',
		'password' => 'root',
		'database' => 'wt' 
	];

	static $connection;

	if (!isset($connection)) {
		// Create connection
		$connection = mysqli_connect($CONFIG['server'], $CONFIG['username'], $CONFIG['password'], $CONFIG['database']);

		if (!$connection) {
			die('Could not connect to database!');
		}
	}

	if ($select) {
		// IS A SELECT QUERY, RETURN ARRAY
		$results = mysqli_query($connection, $SQL);
		$toReturn = [];
		if (mysqli_num_rows($results) > 0) {
			while ($result = mysqli_fetch_assoc($results)) {
				array_push($toReturn, $result);
			}
		}
		return $toReturn;
	} else {
		// RETURN BOOL
		if (mysqli_query($connection, $SQL)) {
			return true;
		} else {
			return false;
		}
	}

	// Execute SQL
}

?>