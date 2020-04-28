<?php 
require '../partials/header.php';

if (!isset($_SESSION['user'])) {
	header('Location: landing.php');
}

require '../controllers/connection.php';

function getTitle() {
	return "Admin";
}

// $userid = $_SESSION['user']['id'];


// $userid = $admin['user_id'];
// $admin_query = "SELECT answer FROM answers WHERE user_id = 4";
// $admin_result = mysqli_query($conn, $admin_query);

// $x = 0;

// foreach ($admin_result as $admin) {
// 	$x += $admin['answer'];
// }
// echo "$x";

// $user_query = "SELECT * FROM users";
// $user_result = mysqli_query($conn, $user_query);
// // $user_info = mysqli_fetch_assoc($user_result);

// foreach ($user_result as $user) {
// 	echo($user['firstname']. " " .$user['lastname']);
// 	echo "<br>";
// }

// $trav_query = "SELECT answer FROM answers WHERE user_id = '$userid' && question_id = 1";
// $trav_result = mysqli_query($conn, $trav_query);
// $trav_info = mysqli_fetch_assoc($trav_result);

// $check_query = "SELECT answer FROM answers WHERE user_id = '$userid' && question_id = 2";
// $check_result = mysqli_query($conn, $check_query);
// $check_info = mysqli_fetch_assoc($check_result);

// $symp_query = "SELECT answer FROM answers WHERE user_id = '$userid' && question_id = 3";
// $symp_result = mysqli_query($conn, $symp_query);
// $symp_info = mysqli_fetch_assoc($symp_result);

 ?>

 <div class="container bg-light shadow p-lg-5 my-4 p-4">
 	<h1>Administrator</h1>
 	<h5>These are sensitive information and must be kept private.</h5>

 	<!-- nav tab -->
	<nav>
		<div class="nav nav-tabs pt-3" id="nav-tab" role="tablist">
			<a class="nav-item nav-link  active" id="nav-reg-tab" data-toggle="tab" href="#nav-reg" role="tab" aria-controls="nav-home" aria-selected="true">PUI</a>
			<a class="nav-item nav-link" id="nav-log-tab" data-toggle="tab" href="#nav-log" role="tab" aria-controls="nav-profile" aria-selected="false">PUM</a>
			<a class="nav-item nav-link" id="nav-ano-tab" data-toggle="tab" href="#nav-ano" role="tab" aria-controls="nav-contact" aria-selected="false">Not PUI/PUM</a>
		</div>
	</nav>
	<!-- end nav tab -->
	<!-- nav content -->
	<div class="tab-content py-3" id="nav-tabContent">
	
		<div class="tab-pane fade show active" id="nav-reg" role="tabpanel" aria-labelledby="nav-reg-tab">
			<h5>PUI (Person Under Investigation).</h5>
			<p class="pb-4">Please advise to seek medical assistance immediately.</p>

			<?php 
				$user_query = "SELECT * FROM users WHERE status = 2";
				$user_result = mysqli_query($conn, $user_query);

				// foreach ($user_result as $user) {
				// 	echo($user['firstname']. " " .$user['lastname']);
				// 	echo "<br>";
				// }
			 ?>

			 <?php foreach ($user_result as $user): ?>
			 	<p class="font-italic font-weight-bold"> <?php echo($user['firstname']. " " .$user['lastname']); ?></p>
			 <?php endforeach ?>

		</div>
		<!-- end PUI -->

		<div class="tab-pane fade" id="nav-log" role="tabpanel" aria-labelledby="nav-log-tab">
			<h5>PUM (Person Under Monitoring) </h5>
			<p class="pb-4">Self Isolate. Please advise to stay at home and away from others. If they can, have a room and bathroom that’s just for them. This can be hard when especially when they're not feeling well, but it will protect those around them.</p>

			<?php 
				$user_query = "SELECT * FROM users WHERE status = 1";
				$user_result = mysqli_query($conn, $user_query);

				// foreach ($user_result as $user) {
				// 	echo($user['firstname']. " " .$user['lastname']);
				// 	echo "<br>";
				// }
			 ?>

			 <?php foreach ($user_result as $user): ?>
			 	<p class="font-italic font-weight-bold"> <?php echo($user['firstname']. " " .$user['lastname']); ?></p>
			 <?php endforeach ?>

		</div>
		<!-- end PUM -->

		<div class="tab-pane fade" id="nav-ano" role="tabpanel" aria-labelledby="nav-ano-tab">
			<h5>Neither PUI nor PUM</h5>
			<p class="pb-4">Stay healthy. Observe Social Distancing. Help stop the spread. When outside the home, advise to stay at least six feet away from other people, avoid groups, and only use public transit if necessary.</p>

			<?php 
				$user_query = "SELECT * FROM users WHERE status = 0";
				$user_result = mysqli_query($conn, $user_query);

				// foreach ($user_result as $user) {
				// 	echo($user['firstname']. " " .$user['lastname']);
				// 	echo "<br>";
				// }
			 ?>

			 <?php foreach ($user_result as $user): ?>
			 	<p class="font-italic font-weight-bold"> <?php echo($user['firstname']. " " .$user['lastname']); ?></p>
			 <?php endforeach ?>

		</div>
		<!-- end NOR -->
	</div>
	<!-- end nav content -->

	<!-- faq -->
	<div class="faq pt-5">

		<h1 class="p-3">Frequently Asked Questions</h1>

		<div class="accordion pb-5" id="accordionExample">
		  <div class="card bg-light">
		    <div class="card-header bg-danger" id="headingOne">
		      <h2 class="mb-0">
		        <button class="btn btn-link text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          What is a Coronavirus?
		        </button>
		      </h2>
		    </div>

		    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
		      <div class="card-body">
		        Coronaviruses are a large family of viruses which may cause illness in animals or humans.  In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.
		      </div>
		    </div>
		  </div>
		  <div class="card bg-light">
		    <div class="card-header bg-danger" id="headingTwo">
		      <h2 class="mb-0">
		        <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          What are the symptoms of COVID-19?
		        </button>
		      </h2>
		    </div>
		    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
		      <div class="card-body">
		        The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Some people become infected but don’t develop any symptoms and don't feel unwell. Most people (about 80%) recover from the disease without needing special treatment. Around 1 out of every 6 people who gets COVID-19 becomes seriously ill and develops difficulty breathing. Older people, and those with underlying medical problems like high blood pressure, heart problems or diabetes, are more likely to develop serious illness. People with fever, cough and difficulty breathing should seek medical attention.
		      </div>
		    </div>
		  </div>
		  <div class="card bg-light">
		    <div class="card-header bg-danger" id="headingThree">
		      <h2 class="mb-0">
		        <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          What can I do to protect myself?
		        </button>
		      </h2>
		    </div>
		    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
		      <div class="card-body">
		        People can catch COVID-19 from others who have the virus. The disease can spread from person to person through small droplets from the nose or mouth which are spread when a person with COVID-19 coughs or exhales. These droplets land on objects and surfaces around the person. Other people then catch COVID-19 by touching these objects or surfaces, then touching their eyes, nose or mouth. People can also catch COVID-19 if they breathe in droplets from a person with COVID-19 who coughs out or exhales droplets. This is why it is important to stay more than 1 meter (3 feet) away from a person who is sick.
		      </div>
		    </div>
		  </div>
		</div>
		
	</div>
	<!-- end faq -->

 </div>
 <!-- end container -->
















<?php 
	require '../partials/footer.php';
 ?>