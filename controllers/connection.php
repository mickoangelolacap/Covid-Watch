<?php 

// mysql -u root

$host = 'localhost'; //determines the host to use
$username = 'root'; //username for the host
$password = ''; //password for the host
$db = 'covidwatch'; //database to be used


// $host = 'db4free.net'; //determines the host to use
// $username = 'mickoangelolacap'; //username for the host
// $password = '85452565macl'; //password for the host
// $db = 'covidwatch'; //database to be used

// remotemysql.com/phpmyadmin
// db4free.net/phpmyadmin

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