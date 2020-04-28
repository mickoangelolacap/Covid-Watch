<?php 
require '../partials/header.php';

if (!isset($_SESSION['user'])) {
	header('Location: landing.php');
}

require '../controllers/connection.php';

function getTitle() {
	return "Profile";
}

$userid = $_SESSION['user']['id'];
$username = $_SESSION['user']['username'];

$answer_query = "SELECT * FROM answers WHERE user_id = '$userid' && answer = 1";
$answer_result = mysqli_query($conn, $answer_query);

$trav_query = "SELECT answer FROM answers WHERE user_id = '$userid' && question_id = 1";
$trav_result = mysqli_query($conn, $trav_query);
$trav_info = mysqli_fetch_assoc($trav_result);

$check_query = "SELECT answer FROM answers WHERE user_id = '$userid' && question_id = 2";
$check_result = mysqli_query($conn, $check_query);
$check_info = mysqli_fetch_assoc($check_result);

$symp_query = "SELECT answer FROM answers WHERE user_id = '$userid' && question_id = 3";
$symp_result = mysqli_query($conn, $symp_query);
$symp_info = mysqli_fetch_assoc($symp_result);

?>

<div class="simg img-fluid">	
	<hr>
</div>

<div class="container bg-light shadow p-md-5 my-md-4 p-4 my-3">

	<div id="printPDF">	
		<?php if ($trav_info == null && $check_info == null && $symp_info == null): ?>
			<div class="row">
				<div class="col-lg-8 pb-5">
					<h2>Good Day!</h2>
					<h5>We will make sure that your answers will not be shared and your information will be kept private.</h5>
					<a href="test-travel.php" class="btn btn-danger my-4 py-2 px-4 text-uppercase "> Start Testing </a>
				</div>
				<!-- end col -->
				<div class="col-lg-4 text-center">
					<img src="../assets/images/coronavirus.png" class="img-fluid" id="coronavirus">
				</div>
			</div>
			<!-- end row -->
			
		<?php else: ?>

			<div class="row">
				<div class="col-lg-8">
					
					<h1 class=""> Thank you for your response! </h1>
					<h2 class="font-italic pt-3"> <?php echo ($_SESSION['user']['firstname']." ".$_SESSION['user']['lastname']); ?></h2>


					 <?php if (mysqli_num_rows($answer_result) >= 2): ?>
						<div id="pui" class="py-2">
							<h5>You are categorized as PUI (Person Under Investigation).</h5>
							<p>Please seek medical assistance immediately.</p>
						</div>

						<?php 
							$status_query = "UPDATE users SET status = 2 WHERE username = '$username'";
							$result = mysqli_query($conn, $status_query);
						 ?>

					 <?php endif ?>

					 <?php if (mysqli_num_rows($answer_result) == 1): ?>
						<div id="pum" class="py-2">
							<h5>You are categorized as PUM (Person Under Monitoring). Self-Isolate</h5>
							<p>You should stay home and away from others. If you can, have a room and bathroom that’s just for you. This can be hard when you’re not feeling well, but it will protect those around you.</p>
						</div>

						<?php 
							$status_query = "UPDATE users SET status = 1 WHERE username = '$username'";
							$result = mysqli_query($conn, $status_query);
						 ?>

					 <?php endif ?>

					 <?php if (mysqli_num_rows($answer_result) == 0): ?>
						<div id="npuipum" class="py-2">
							<h5>You are neither PUI nor PUM. Stay healthy. Observe Social Distancing</h5>
							<p>Help stop the spread. When outside the home, stay at least six feet away from other people, avoid groups, and only use public transit if necessary.</p>
						</div>

						<?php 
							$status_query = "UPDATE users SET status = 0 WHERE username = '$username'";
							$result = mysqli_query($conn, $status_query);
						 ?>

					 <?php endif ?>
				</div>
				<!-- end col -->
				<div class="col-lg-4 text-center">
					<?php if (mysqli_num_rows($answer_result) >= 2): ?>
						<img src="../assets/images/pui.png" class="img-fluid mt-lg-0 mt-5" id="coronavirus">
					<?php endif ?>
					<?php if (mysqli_num_rows($answer_result) == 1): ?>
						<img src="../assets/images/pum.png" class="img-fluid mt-lg-0 mt-5" id="coronavirus">
					<?php endif ?>
					<?php if (mysqli_num_rows($answer_result) == 0): ?>
						<img src="../assets/images/nor.png" class="img-fluid mt-lg-0 mt-5" id="coronavirus">
					<?php endif ?>
				</div>
				<!-- end col -->
			</div>
			<!-- end row -->

			 <!-- summary -->
			 <div class="pt-5">
			 	<h1 class="text-danger p-1"> Summary </h1>

				<table class="table table-hover table-dark table-striped">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Question</th>
				      <th scope="col">Response</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Travelled in the past 14 days</td>
				      <td><?php 
				      		if ($trav_info['answer']) {
								echo "Yes";
							}
							else {
								echo "No";
							}
				       ?></td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Exposed to Covid-19 patients</td>
				      <td><?php 
				      		if ($check_info['answer']) {
								echo "Yes";
							}
							else {
								echo "No";
							}
				       ?></td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Experiencing Symptoms</td>
				      <td><?php 
				      		if ($symp_info['answer']) {
								echo "Yes";
							}
							else {
								echo "No";
							}
				       ?></td>
				    </tr>
				  </tbody>
				</table>

			 </div>
			 <!-- end summary -->

			<div class="pb-5 summary">
				<img src="../assets/images/print.png" width="50" height="50" class="img-fluid my-3" id="print" type="button" onclick="printJS('printPDF', 'html')">
				<a href="test-travel.php" class="btn btn-danger px-4 mx-2"> Test Again </a>
			</div>

		<?php endif ?>

	</div>
	<!-- end printPDF -->


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