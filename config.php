<?php

	$servername = "localhost:3307";
        $username = "root";
        $password = "";
        $database = "banking_system";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
