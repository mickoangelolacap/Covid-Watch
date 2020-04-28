<?php 
	require '../partials/header.php';

	if (!isset($_SESSION['user'])) {
		header('Location: landing.php');
	}

	function getTitle() {
	return "Test Travel";
}

 ?>

<div class="container-fluid">
	<div class="row containerTest">
		<!-- traveller -->
		<div class="col-lg-5 offset-lg-1 px-5 my-lg-auto my-5">
			<form action="../controllers/travel-result.php" method="POST">
				<h3 class="py-4"> Did you travel in the past 14 days to countries with local transmission or areas with Enhanced Community Quarantine (ECQ)?</h3>

				<label class="btn btn-light btn-block">
					<input type="radio" name="trav" value="male" id="travyes"></input> YES
				</label>

				<label class="btn btn-light btn-block">
					<input type="radio" name="trav" value="female" id="travno"></input> NO
				</label>

				<!-- BUTTON PROCEED -->
				<div class="text-center py-3">
					<button type="submit" name="submit1" class="btn btn-danger btn-block"> Proceed </button>
				</div>
				<!-- end button -->
			</form>
		</div>
		<!-- end traveller -->

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