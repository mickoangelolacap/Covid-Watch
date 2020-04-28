<?php 
	session_start();
	require 'connection.php';

	$symp = htmlspecialchars($_POST['symp']);
	$userid = $_SESSION['user']['id'];


	if ($symp == 'male') {
		$symp = true;
	} else {
		$symp = false;
	}

	$userid_query = "SELECT * FROM answers WHERE user_id = '$userid' && question_id = 3";
	$userid_result = mysqli_query($conn, $userid_query);

	if (isset($_POST['submit3'])) {

		if (mysqli_num_rows($userid_result) > 0) {
			$answer_query = "UPDATE answers SET answer = '$symp' WHERE user_id = $userid && question_id = 3";
		}
		else {
			$answer_query = "INSERT INTO answers(user_id, question_id, answer) VALUES ($userid, 3, '$symp')";
		}


		if ($_POST['symp'] == 'male') {
			header('location: ../views/profile.php');
			$result = mysqli_query($conn, $answer_query);
		}
		else if ($_POST['symp'] == 'female') {
			header('location: ../views/profile.php');
			$result = mysqli_query($conn, $answer_query);
		}
		else {
			header('location: ../views/test-symptoms.php');
		}
	}


 ?>