<?php 
	require '../partials/header.php';

	if (!isset($_SESSION['user'])) {
		header('Location: landing.php');
	}

	function getTitle() {
	return "Test Symptoms";
}

 ?>

<div class="container-fluid">
	<div class="row">
		<!-- symptoms -->
		<div class="col-lg-5 offset-lg-1 px-5 my-lg-auto my-5">
			<form action="../controllers/symptoms-result.php" method="POST">
				<h3 class="py-4"> Is your body temparature above 38c? Or are you experiencing any of these symptoms (cough, fever, and shortness of breath)? </h3>

				<label class="btn btn-light btn-block">
					<input type="radio" name="symp" value="male" id="sympyes"></input> YES
				</label>

				<label class="btn btn-light btn-block">
					<input type="radio" name="symp" value="female" id="sympno"></input> NO
				</label>

				<!-- BUTTON PROCEED -->
				<div class="text-center py-3">
					<button name="submit3" class="btn btn-danger btn-block"> Proceed </button>
				</div>
				<!-- end button -->
			</form>
		</div>
		<!-- end symptoms -->


		<div class="col-lg-5 my-5 d-none d-md-block text-center">
			<img src="../assets/images/landing.png" class="img-fluid covidImage">
		</div>
		
	</div>
	<!-- end row -->
</div>
<!-- end container fluid -->

 <?php 
	require '../partials/footer.php';
 ?>