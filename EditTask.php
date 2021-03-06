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
	<title>Edit Task</title>

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
	<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js'></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<body >
		<?php include  'sessionCheck.php'; ?>
		<?php 
			if ($_SESSION['type']=='admin') {
				include  'headerM.php';	
			}
			else{
				include  'headerU.php';
			}
			
		?>
		<?php 
	      if(!empty($_GET['taskID'])){
	        $id =$_GET['taskID'];
	        echo "<script> 
	         $.ajax({
		            method: 'POST',
		            url: 'http://localhost/IssueTrackingsystem/IssueTrackingsystem/getTask.php',
		            data:{ID: '$id'}
		        }).done(function( Info ) {
		            var obj = JSON.parse(Info);
		            document.getElementById('taskId').value =$id;
		            document.getElementById('taskTitle').value =obj[0].title;
		            document.getElementById('assignTo').value =obj[0].assignto;
		            document.getElementById('desc').value = obj[0].description;
		            console.log(Info);
		        });


	        </script>";
	      }
      
        ?>

		<div class="main-wrapper-first" >
			<div class="banner-area">
				<div class="container">
					<div class="row justify-content-center height align-items-center" style="height: 828px">
						<div class="col-lg-8">
							<div class="banner-content text-center">
								<span class="text-white top text-uppercase">Dinomuz Issue</span>
								<h1 class="text-white text-uppercase">Edit Task Information </h1>
								<div class="row justify-content-center align-items-center">
									<div class="col-lg-8 col-md-8 " >
										<form action="EditTaskController.php" method="POST">
											<div class="mt-10">
												<p style="text-align: left;color: #ffe6e6;font-size: 21px;font-family: initial">Task ID</p>
												<input readonly="true" type="text" name="taskId" id="taskId" placeholder="Task ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Task ID'" required class="single-input">
											</div>
											<div class="mt-10">
												<p style="text-align: left;color: #ffe6e6;font-size: 21px;font-family: initial">Task Title</p>
												<input type="text" name="title" id="taskTitle" placeholder="Task Title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Task Title'" required class="single-input">
											</div>
							
											<div class="mt-10">
												<p style="text-align: left;color: #ffe6e6;font-size: 21px;font-family: initial">Assign To</p>
												<input type="text" name="assignTo"  id="assignTo" placeholder="Assign To" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Assign To" required class="single-input">
											</div>
											<div class="mt-10">
												<p style="text-align: left;color: #ffe6e6;font-size: 21px;font-family: initial">Task Description</p>
												<textarea  id='desc' class="single-textarea" name="desc" placeholder="Task Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Task Description'" required></textarea>
											</div>

							
								</div>
									</div>
											<br> <br>
 											<input type="submit" class="genric-btn success-border circle arrow" value='Update Task'>
										</form>
							</div>
							
						</div>
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
