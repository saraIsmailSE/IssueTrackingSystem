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
		<title>Add Users</title>
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
      		if(!empty($_GET['error'])){
        		$message =$_GET['error'];
        		echo "<script type='text/javascript'> sweetAlert('','$message', 'error');  </script>";
      		}
    	?>
		<div class="main-wrapper-first">
			
		
	
			<!-- Start Align Area -->
			
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<h3 class="mb-30">Enter User Info</h3>
						<form action="addUserController.php" method="POST">
							<div class="mt-10">
								<input type="text" name="Uname" id="Uname" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="Lname" id="lastname" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
							</div>
							<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
								<div class="form-select">
									<select name="Utype" id="Utype">
										<option value="0">Select Type of User</option>
										<option value="dev">Devloper</option>
										<option value="pm">Project Manager</option>
										<option value="qa">Quality Assurance</option>
									</select>
								</div>
							</div>
							<br> <br>
 							<input type="submit" class="genric-btn success-border circle arrow" value='Add User'>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>

		<!-- End Align Area -->
		
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
