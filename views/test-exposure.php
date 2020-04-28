<?php 
	require '../partials/header.php';

	if (!isset($_SESSION['user'])) {
		header('Location: landing.php');
	}

	function getTitle() {
	return "Test Exposure";
}

 ?>

<div class="container-fluid">
	<div class="row">

		<!-- travel exposure -->
		<div class="col-lg-5 offset-lg-1 px-5 my-lg-auto my-5">
			<form action="../controllers/exposure-result.php" method="POST">
				<h3 class="pt-4"> Are you doing atleast one of these things? </h3>
				<p> Select all that apply </p>

				<label class="btn btn-light btn-block text-left">
					<input type="checkbox" name="check" id="expose1"></input> Providing direct care for COVID-19 patient? 
				</label>
				<label class="btn btn-light btn-block text-left">
					<input type="checkbox" name="check" id="expose2"></input> Working together or staying in the same close environment of a COVID-19 patient?
				</label>
				<label class="btn btn-light btn-block text-left">
					<input type="checkbox" name="check" id="expose3"></input> Travelling together with COVID-19 patient in any kind of conveyance? 
				</label>
				<label class="btn btn-light btn-block text-left">
					<input type="checkbox" name="check" id="expose4"></input> Living in the same household as a COVID-19 patient? 
				</label>
			<!-- 	<label class="btn btn-light btn-block text-left">
					<input type="checkbox" id="exposenone"></input> None of the above 
				</label> -->

				<!-- BUTTON PROCEED -->
				<div class="text-center py-3">
					<button type="submit" name="submit2" class="btn btn-danger btn-block"> Proceed </button>
				</div>
				<!-- end button -->
			</form>
		</div>
		<!-- end travel exposure -->

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