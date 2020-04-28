<?php 
	session_start();
	require 'connection.php';
	
	$username = htmlspecialchars($_POST['username']);
	$password = sha1(htmlspecialchars($_POST['password']));

	$user_query = "SELECT * FROM users WHERE username = '$username'";
	$user_result = mysqli_query($conn, $user_query);
	// var_dump($user_result);

	$user_info = mysqli_fetch_assoc($user_result);

	// var_dump($user_info);

	if (mysqli_num_rows($user_result) > 0) {
		if ($password != $user_info['password']) {
			header('location: ../views/landing.php');
			die('login failed');
		}
		else {
			$_SESSION['user'] = $user_info;
			header('location: ../views/profile.php');
		}
	}
	else {
		echo "Wrong credentials!";
		header('location: ../views/landing.php');
	}

 ?>