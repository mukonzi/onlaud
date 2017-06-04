<?php

/*********************************************************************************************
THE FOLLOWING DATABASE ACCESS KEYS ARE NOT ACTUAL VALUES FOR OUR SITE FOR SECURITY REASONS.

TO TEST THE CODE VIEW THE SITE LIVE AT https://onlaud.com

********************************************************************************************/

$servername = "SERVERNAME";
$username = "USERNAME";
$password = "PASSWORD";
$dbname = "DBNAME";


      // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

	 // Check connection
	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}




?>