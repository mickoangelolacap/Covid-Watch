<?php 
	session_start();
	require 'connection.php';

	$trav = htmlspecialchars($_POST['trav']);
	$userid = $_SESSION['user']['id'];

	if ($trav == 'male') {
		$trav = true;
	} else {
		$trav = false;
	}


	$userid_query = "SELECT * FROM answers WHERE user_id = '$userid' && question_id = 1";
	$userid_result = mysqli_query($conn, $userid_query);


	if (isset($_POST['submit1'])) {

		if (mysqli_num_rows($userid_result) > 0) {
			$answer_query = "UPDATE answers SET answer = '$trav' WHERE user_id = $userid && question_id = 1";
		}
		else {
			$answer_query = "INSERT INTO answers(user_id, question_id, answer) VALUES ($userid, 1, '$trav')";
		}


		if ($_POST['trav'] == 'male') {
			header('location: ../views/test-exposure.php');
			$result = mysqli_query($conn, $answer_query);
		}
		else if ($_POST['trav'] == 'female') {
			header('location: ../views/test-exposure.php');
			$result = mysqli_query($conn, $answer_query);
		}
		else {
			header('location: ../views/test-travel.php');
		}
	}

 ?>