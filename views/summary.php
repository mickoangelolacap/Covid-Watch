<?php 
require '../partials/header.php';

if (isset($_SESSION['user'])) {
	header('location: profile.php');
}

function getTitle() {
	return "Summary";
}
?>

<nav class="navbar navbar-dark bg-dark">
	<a class="navbar-brand" href="landing.php">
		<img src="../assets/images/icon.png" width="30" height="30" class="d-inline-block align-top mx-1" alt="">
		Covid-Watch
	</a>
</nav>

<div class="simg img-fluid">	
	<hr>
</div>

<div class="container shadow  p-md-5 my-md-4 p-4 my-3">
	<div id="printPDF">
		<div class="result row">
			<div class="col-lg-8">
				<h1 class="pb-3">Thank you for your response!</h1>
				<!-- <h2 class="pb-2" id="getName"> Micko Angelo Lacap </h2> -->
				<div id="npuipum">
					<h5>You are neither PUI nor PUM. Stay healthy. Observe Social Distancing</h5>
					<p>Help stop the spread. When outside the home, stay at least six feet away from other people, avoid groups, and only use public transit if necessary.</p>
				</div>
				<div id="pum">
					<h5>You are categorized as PUM (Person Under Monitoring). Self-Isolate</h5>
					<p>You should stay home and away from others. If you can, have a room and bathroom that’s just for you. This can be hard when you’re not feeling well, but it will protect those around you.</p>
				</div>
				<div id="pui">
					<h5>You are categorized as PUI (Person Under Investigation).</h5>
					<p>Please seek medical assistance immediately.</p>
				</div>
			</div>
			<!-- end col -->
			<div id="npuipum" class="col-lg-4 text-center">
				<img src="../assets/images/coronavirus.png" class="img-fluid mt-lg-0 mt-5" id="coronavirus">
			</div>
			<!-- <div id="npuipum" class="col-lg-4 text-center">
				<img src="../assets/images/nor.png" class="img-fluid mt-lg-0 mt-5" id="coronavirus">
			</div>
			<div id="pum" class="col-lg-4 text-center">
				<img src="../assets/images/pum.png" class="img-fluid mt-lg-0 mt-5" id="coronavirus">
			</div>
			<div id="pui" class="col-lg-4 text-center">
				<img src="../assets/images/pui.png" class="img-fluid mt-lg-0 mt-5" id="coronavirus">
			</div> -->
			<!-- end col -->
		</div>
		<!-- end row result -->


		<div class="py-5">
			<h1 class="text-danger p-1"> Summary </h1>

			<!-- FETCH JAVASCRIPT prompt() DATA -->
			<div>
				<table class="table table-hover table-dark table-striped">
					<tbody>
						<tr>
							<th scope="col">Question</th>
							<th scope="col">Response</th>
						</tr>
						<tr id="exposure1"></tr>
						<tr id="exposure2"></tr>
						<tr id="exposure3"></tr>
						<tr id="exposure4"></tr>
						<tr id="exposure5"></tr>
						<tr id="symptoms1"></tr>
						<tr id="symptoms2"></tr>

						<tr id="nonA"></tr>
						<tr id="nonB"></tr>
						<tr id="nonC"></tr>
						<tr id="nonD"></tr>
						<tr id="nonE"></tr>
						<tr id="nonF"></tr>
						<tr id="nonG"></tr>
						<tr id="nonH"></tr>
						<tr id="nonI"></tr>
						<tr id="nonJ"></tr>
						<tr id="nonK"></tr>
						<tr id="nonL"></tr>
					</tbody>
				</table>

			</div>
			<!-- END FETCH -->

			<div class="summary">
				<img src="../assets/images/print.png" width="50" height="50" class="img-fluid my-3" id="print" type="button" onclick="printJS('printPDF', 'html')">
				<a href="../index.php" class="btn btn-danger px-4 mx-2" id="reTest"> Test Again </a>
			</div>
		</div>
		<!-- end summary -->
	</div>
	<!-- end printPDF -->

	<div class="faq pt-5">

		<h1 class="p-3 text-danger">Frequently Asked Questions</h1>

		<div class="accordion pb-5" id="accordionExample">
		  <div class="card bg-light rounded">
		    <div class="card-header bg-dark rounded" id="headingOne">
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
		  <div class="card bg-light rounded">
		    <div class="card-header bg-dark rounded" id="headingTwo">
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
		  <div class="card bg-light rounded">
		    <div class="card-header bg-dark rounded" id="headingThree">
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
<!-- end content -->

<!-- external js -->
<script src="../assets/js/summary.js"></script>


<?php 
require '../partials/footer.php';
?>











