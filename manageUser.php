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
	<title>Manage Users</title>

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
		<?php include  'sessionCheck.php'; ?>
		<?php include  'headerM.php'; ?>
		 <?php

	            if(!empty($_GET['sucsess'])){
	                $message =$_GET['sucsess'];
	                
	                echo '<script type="text/javascript"> swal("success","'.$message.'","success").then((value) => {
	                if (value) {
	                	window.location.href="manageUser.php ";

	          		}
	          		else{
	            		window.location.href="manageUser.php ";
	          		}
	            	});
	            	</script>';
	            }  
          ?>

		<div class="main-wrapper-first">
			
			<div class="banner-area">
				<div class="container">
					<div class="row justify-content-center height align-items-center">
						<div class="col-lg-8">
							<div class="banner-content text-center">
								<span class="text-white top text-uppercase">Dinomuz Issue</span>
								<h1 class="text-white text-uppercase">Select an Action </h1>
								<a href="addUser.php" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Add Usres </span><span class="lnr lnr-arrow-right"></span></a>
								<a href="editeUser.php" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Edit Users</span><span class="lnr lnr-arrow-right"></span></a>
								
							</div>
						</div>
					</div>
				</div>
			</div>
	
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
