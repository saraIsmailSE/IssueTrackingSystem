<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Dinomuz Issue</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<?php include  'header.php'; ?>
		<div class="main-wrapper-first">
			<!-- Start Story Area -->

			<section class="story-area">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<div class="story-title">
								<h3 class="text-white">Login </h3>
								<a href="home.php"><span style="text-decoration: underline;" class="text-uppercase text-white">Return Home</span></a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="story-box">
								<form action="loginController.php" method="POST">
									<div class="mt-10">
										<input type="text" name="user_name" placeholder="User Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'User Name '" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="password" name="pass_word" placeholder="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'User Name'" required class="single-input">
									</div>
									<input type="submit" class="genric-btn success-border circle arrow" value='login'>
							
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Story Area -->
			<!-- <div class="banner-area">
				<div class="container">
					<div class="row justify-content-center height align-items-center">
						<div class="col-lg-8">
							<div class="banner-content text-center">
								<span class="text-white top text-uppercase">Dinomuz Issue</span>
								<h1 class="text-white text-uppercase">Return To Home Page</h1>
								<a href="home.php" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Home</span><span class="lnr lnr-arrow-right"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			
			
			
			<!-- Start footer Area -->
			<?php include  'footer.php'; ?>

			<!-- End footer Area -->
		</div>




		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
