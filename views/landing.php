<?php 
require '../partials/header.php';
// require '../controllers/connection.php';

if (isset($_SESSION['user'])) {
	header('location: profile.php');
}

function getTitle() {
	return "Login Page";
}

// $user_query = "SELECT * FROM users";
// $user_result = mysqli_query($conn, $user_query);

// foreach ($user_result as $user) {
// 	$username = $user['username'];
// 	var_dump($username);
// }

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 text-center">
			<img class="img-fluid animated zoomIn covidImage" src="../assets/images/landing.png">
		</div>
		<!-- end col -->
		<div class="col-lg-5 p-lg-5 px-5 p-4 my-lg-5">

			<h1 id="covidTitle" class="animated slideInDown py-lg-2 py-md-4 pb-4 text-lg-left text-center"> Covid-Watch </h1>

			<!-- nav tab -->
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link" id="nav-reg-tab" data-toggle="tab" href="#nav-reg" role="tab" aria-controls="nav-home" aria-selected="true">Register</a>
					<a class="nav-item nav-link active" id="nav-log-tab" data-toggle="tab" href="#nav-log" role="tab" aria-controls="nav-profile" aria-selected="false">Login</a>
					<a class="nav-item nav-link" id="nav-ano-tab" data-toggle="tab" href="#nav-ano" role="tab" aria-controls="nav-contact" aria-selected="false">Guest</a>
				</div>
			</nav>
			<!-- end nav tab -->
			<!-- nav content -->
			<div class="tab-content py-4" id="nav-tabContent">
				<!-- register -->
				<div class="tab-pane fade" id="nav-reg" role="tabpanel" aria-labelledby="nav-reg-tab">
					<!-- reg form -->
					<form class="needs-validation" action="../controllers/register.php" method="POST" novalidate>
					  <div class="form-row">
					    <div class="col-md-6 mb-3">
					      <label for="fname">First name</label>
					      <input name="firstname" type="text" class="form-control shadow-sm" id="fname" placeholder="Micko Angelo" required>
					    </div>
					    <div class="col-md-6 mb-3">
					      <label for="lname">Last name</label>
					      <input name="lastname" type="text" class="form-control shadow-sm" id="lname" placeholder="Lacap"required>
					    </div>
					  </div>
					  <!-- end 1st row -->
					  <div class="form-row">
					    <div class="col-md-8 mb-3">
					      <label for="email">Email</label>
					      <input name="email" type="email" class="form-control shadow-sm" id="email" placeholder="Email" required>
					      <div class="invalid-feedback d-none">
					        Email is already used.
					      </div>
					    </div>
					    <div class="col-md-4 mb-3">
					      <label for="age">Age</label>
					      <input name="age" type="number" class="form-control shadow-sm" id="age" placeholder="18" required>
					    </div>
					  </div>
					  <!-- end 2nd row -->
					  	<div class="form-group">
							<label for="rusername"> Username </label>
							<input  id="rusername" type="text" name="username" class="form-control shadow-sm" placeholder="Username" required>
							<div class="invalid-feedback d-none">
					        	Username is already used.
					      	</div>
						</div>
						<!-- end form-group -->

						<div class="form-group">
							<label for="rpassword"> Password </label>
							<input  id="rpassword" type="password" name="password" class="form-control shadow-sm" placeholder="Password" required>
						</div>
						<!-- end form-group -->

						<div class="form-group">
							<label for="cpassword"> Confirm Password </label>
							<input  id="cpassword" type="password" name="cpassword" class="form-control shadow-sm" placeholder="Confirm Password" required>
							<div class="invalid-feedback d-none">
					        	Password did not match.
					      </div>
						</div>
						<!-- end form-group -->

					  <button class="btn btn-danger px-4 mt-4" type="submit">Register</button>
					</form>
					<!-- end reg form -->


					<!-- reg form -->
			<!-- 		<form action="../controllers/register.php" method="POST">
						<div class="form-group">
							<label for="fname"> First Name </label>
							<input  id="fname" type="text" name="firstname" class="form-control shadow-sm" placeholder="Micko Angelo">
						</div>
						
						<div class="form-group">
							<label for="lname"> Last Name </label>
							<input  id="lname" type="text" name="lastname" class="form-control shadow-sm" placeholder="Lacap">
						</div>
						

						<div class="form-group">
							<label for="confirm"> Age </label>
							<input  id="confirm" type="number" name="age" class="form-control shadow-sm"  placeholder="18">
						</div>
						

						<div class="form-group">
							<label for="email"> Email </label>
							<input  id="email" type="email" name="email" class="form-control shadow-sm" placeholder="Email">
						</div>
						

						<div class="form-group">
							<label for="rusername"> Username </label>
							<input  id="rusername" type="text" name="username" class="form-control shadow-sm" placeholder="Username">
						</div>
						

						<div class="form-group">
							<label for="rpassword"> Password </label>
							<input  id="rpassword" type="password" name="password" class="form-control shadow-sm" placeholder="Password">
						</div>
						

						<div class="form-group">
							<label for="cpassword"> Confirm Password </label>
							<input  id="cpassword" type="password" name="cpassword" class="form-control shadow-sm" placeholder="Confirm Password">
						</div>
						
						<button type="submit" class="btn btn-danger px-4 mt-4"> Register </button>

					</form> -->
					<!-- end reg form -->
				</div>
				<!-- end register -->

				<!-- login -->
				<div class="tab-pane fade show active" id="nav-log" role="tabpanel" aria-labelledby="nav-log-tab">
					<!-- login form -->
					<form class="needs-validation" action="../controllers/login.php" method="POST" novalidate>
						<div class="form-group">
							<label for="username"> Username </label>
							<input id="username" type="text" name="username" class="form-control shadow-sm" placeholder="Username" required>
							<div class="invalid-feedback d-none">
					        	Invalid username.
					      	</div>
						</div>

						<div class="form-group">
							<label for="password"> Password </label>
							<input id="password" type="password" name="password" class="form-control shadow-sm" placeholder="Password" required>
							<div class="invalid-feedback d-none">
					        	Password incorrect.
					      	</div>
						</div>

						<button id="login" type="submit" class="btn btn-danger mt-4 px-5"> Login </button>

					</form>
					<!-- end login form -->
				</div>
				<!-- end login -->

				<!-- guest -->
				<div class="tab-pane fade" id="nav-ano" role="tabpanel" aria-labelledby="nav-ano-tab">
					<h6 class="pt-3">Good Day!</h6>
					<p>Your answers will not be stored and your information will be kept private.</p>
					<a href="test.php" class="btn btn-danger px-4 mt-3 animated fadeIn"> Start Testing </a>
				</div>
				<!-- end guest -->
			</div>
			<!-- end nav content -->
		</div>
		<!-- end col -->
	</div>
	<!-- end row -->
</div>
<!-- end container fluid -->

<script src="../assets/js/landing.js"></script>

<?php 
require '../partials/footer.php';
?>