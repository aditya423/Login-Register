<?php

	$conn = mysqli_connect("localhost", "root", "", "login_register");  // servername, username, password, dbname

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>