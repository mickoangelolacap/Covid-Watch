<?php 
	require 'connection.php';

	$firstname = htmlspecialchars($_POST['firstname']);
	$lastname = htmlspecialchars($_POST['lastname']);
	$age = htmlspecialchars($_POST['age']);
	$email = htmlspecialchars($_POST['email']);
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$cpassword = htmlspecialchars($_POST['cpassword']);
	$role_id = 2;

	if ($firstname != "" && $lastname != "") {
		echo "Welcome " . $firstname . " " . $lastname;
		echo "<br>";
	}
	else {
		echo "please provide a complete name";
		echo "<br>";
	}

	if ($email != "") {
		echo "your email is: " . $email;
		echo "<br>";
	}
	else {
		echo "please provide a valid email";
		echo "<br>";
	}

	if ($password != "" && $cpassword != ""){

		$password = sha1($password);
		$cpassword = sha1($cpassword);

		if ($password === $cpassword) {
		
			$insert_query = "INSERT INTO users(firstname, lastname, age, email, username, password, role_id) VALUES ('$firstname', '$lastname', '$age', '$email', '$username', '$password', $role_id)";

			// var_dump($insert_query);

			$result = mysqli_query($conn, $insert_query);

			if ($result) {
				// echo "registered successfully";
				header('Location: ../views/landing.php');
			}
			else {
				// echo mysqli_error($conn);
				echo "Username or Email is already used, Please try a different one.";
			}

		}
		else {
			echo "passwords do not match";
			echo "<br>";
		}
	}
	else {
		echo "please check password fields";
		echo "<br>";
	}
 ?>

 <a href="../views/landing.php"> GO BACK </a>