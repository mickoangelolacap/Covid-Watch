<?php 
	session_start();
	require 'connection.php';

	$check = htmlspecialchars($_POST['check']);
	$userid = $_SESSION['user']['id'];

	if ($check == 'on') {
		$check = 1;
	} else {
		$check = 0;
	}

	$userid_query = "SELECT * FROM answers WHERE user_id = '$userid' && question_id = 2";
	$userid_result = mysqli_query($conn, $userid_query);


	if (isset($_POST['submit2'])) {

		if (mysqli_num_rows($userid_result) > 0) {
			$answer_query = "UPDATE answers SET answer = '$check' WHERE user_id = $userid && question_id = 2";
		}
		else {
			$answer_query = "INSERT INTO answers(user_id, question_id, answer) VALUES ($userid, 2, '$check')";
		}


		if ($_POST['check']) {
			header('location: ../views/test-symptoms.php');
			$result = mysqli_query($conn, $answer_query);
		} 
		else {
			header('location: ../views/test-symptoms.php');
			$result = mysqli_query($conn, $answer_query);
		}
	}


 ?>