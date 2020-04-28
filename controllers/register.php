<?php 
	require 'connection.php';

	$firstname = htmlspecialchars($_POST['firstname']);
	$lastname = htmlspecialchars($_POST['lastname']);
	$age = htmlspecialchars($_POST['age']);
	$email = htmlspecialchars($_POST['email']);
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$cpassword = htmlspecialchars($_POST['cpassword']);
	$role_id = 1;

	if ($firstname != "" && $lastname != "") {
		echo "Welcome " . $firstname . " " . $lastname;
	}
	else {
		echo "please provide a complete name";
	}

	if ($email != "") {
		echo "your email is: " . $email;
	}
	else {
		echo "please provide a valid email";
	}

	if ($password != "" && $cpassword != ""){

		$password = sha1($password);
		$cpassword = sha1($cpassword);

		if ($password === $cpassword) {
		
			$insert_query = "INSERT INTO users(firstname, lastname, age, email, username, password, role_id) VALUES ('$firstname', '$lastname', '$age', '$email', '$username', '$password', $role_id)";

			var_dump($insert_query);

			$result = mysqli_query($conn, $insert_query);

			if ($result) {
				echo "registered successfully";
				// header('Location: ../views/login.php');
			}
			else {
				echo mysqli_error($conn);
			}

		}
		else {
			echo "passwords do not match";
		}
	}
	else {
		echo "please check password fields";
	}
 ?>