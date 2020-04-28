<?php 
 	session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>

 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	

 	<title> Covid-Watch | 

 		<?php echo getTitle(); ?>

 	</title>

 	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- fav icon -->
	<link rel="icon" href="../assets/images/icon.png">

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2|Montserrat&display=swap" rel="stylesheet">

	<!-- fontawesome icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

	<!-- external css -->
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">


 </head>
 <body>

<?php if (isset($_SESSION['user'])): ?>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

	 	<?php if (isset($_SESSION['user'])): ?>
	 		<a class="navbar-brand" href="#">Welcome, <?php echo $_SESSION['user']['firstname']; ?>!</a>
	 	<?php else: ?>
	 		<a class="navbar-brand" href="#">Covid-Watch</a>
	 	<?php endif ?>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div id="navbarNav" class="collapse navbar-collapse">
			<ul class="navbar-nav">

				<?php if (isset($_SESSION['user'])): ?>
					<li class="nav-item">
					<a href="profile.php" class="nav-link">Profile</a>
					</li>

					<?php if ($_SESSION['user']['role_id'] == 1): ?>
						<li class="nav-item">
							<a href="admin.php" class="nav-link">Admin</a>
						</li>
					<?php endif ?>

					<li class="nav-item">
						<a href="../controllers/logout.php" class="nav-link">Logout</a>
					</li>

				<?php endif ?>

			</ul>
		</div>
	</nav>
	<!-- end navbar -->

<?php endif ?>