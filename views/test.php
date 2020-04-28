<?php 
	require '../partials/header.php';

	if (isset($_SESSION['user'])) {
		header('location: profile.php');
	}

	function getTitle() {
	return "Test";
}

 ?>
 
<nav class="navbar navbar-dark bg-dark">
	<a class="navbar-brand" href="#">
		<img src="../assets/images/icon.png" width="30" height="30" class="d-inline-block align-top mx-1" alt="">
		Covid-Watch
	</a>
</nav>

<div class="container-fluid">
	<div class="row">
		<!-- traveller -->
		<div id="traveller" class="col-lg-5 offset-lg-1 px-5 my-lg-auto my-5">

			<h3 class="py-4"> Did you travel in the past 14 days to countries with local transmission or areas with Enhanced Community Quarantine (ECQ)?</h3>

			<div class="text-center py-1">
				<button type="radio" name="trav" class="btn btn-light btn-block" id="travyes"> YES </button>
			</div>
			<div class="text-center py-1">
				<button type="radio" name="trav" class="btn btn-light btn-block" id="travno"> NO </button>
			</div>

			<!-- BUTTON PROCEED -->
			<div class="text-center py-3">
				<button id="proceed" class="btn btn-danger btn-block"> Proceed </button>
			</div>
			<!-- end button -->

		</div>
		<!-- end traveller -->

		<!-- travel exposure -->
		<div id="exposure" class="col-lg-5 offset-lg-1 px-5 my-lg-auto my-5">

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
			<label class="btn btn-light btn-block text-left">
				<input type="checkbox" name="check" id="exposenone"></input> None of the above 
			</label>

			<!-- BUTTON PROCEED -->
			<div class="text-center py-3">
				<button id="proceed2" class="btn btn-danger btn-block"> Proceed </button>
			</div>
			<!-- end button -->

		</div>
		<!-- end travel exposure -->

		<!-- symptoms -->
		<div id="symptoms" class="col-lg-5 offset-lg-1 px-5 my-lg-auto my-5">

			<h3 class="py-4"> Is your body temparature above 38c? Or are you experiencing any of these symptoms (cough, fever, and shortness of breath)? </h3>

			<div class="text-center py-1">
				<button type="radio" name="symp" class="btn btn-light btn-block" id="sympyes"> YES </button>
			</div>
			<div class="text-center py-1">
				<button type="radio" name="symp" class="btn btn-light btn-block" id="sympno"> NO </button>
			</div>

			<!-- BUTTON PROCEED -->
			<div class="text-center py-3">
				<button id="proceed3" class="btn btn-danger btn-block"> Proceed </button>
			</div>
			<!-- end button -->

		</div>
		<!-- end symptoms -->

		<div class="col-lg-5 my-5 d-none d-md-block text-center">
			<img src="../assets/images/landing.png" class="img-fluid covidImage">
		</div>
		
	</div>
	<!-- end row -->
</div>
<!-- end container fluid -->

<script src="../assets/js/script.js"></script>


 <?php 
	require '../partials/footer.php';
 ?>