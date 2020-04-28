<?php 

// mysql -u root

$host = 'localhost'; //determines the host to use
$username = 'root'; //username for the host
$password = ''; //password for the host
$db = 'covid-watch'; //database to be used


// $host = 'remotemysql.com'; //determines the host to use
// $username = 'root'; //username for the host
// $password = ''; //password for the host
// $db = 'covid-watch'; //database to be used

// remotemysql.com/phpmyadmin

// open a connection to the MySQL server
// mysqli_connect(host, user, password, database)
$conn = mysqli_connect($host, $username, $password, $db);

if (!$conn) {
	// mysqli_error() returns a string description of the last error message
	// die('message') prints a message and exits the php script
	die('connection failed: ' . $mysqli_error($conn));
}
else {
	// var_dump('successfully connected...');
}

 ?>