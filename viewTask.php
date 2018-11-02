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
	<title>View Tasks</title>

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
  	<style>
  		.h:hover {
    		background-color: #ffe6e6;
		}
  	</style>
	<body ng-app='myApp'>
		<?php include  'sessionCheck.php'; ?>
		<?php 
			if ($_SESSION['type']=='admin') {
				include  'headerM.php';	
			}
			else{
				include  'headerU.php';
			}
			
		?>
		   
		<div class="main-wrapper-first" ng-controller='taskCtrl'>
			<div class="banner-area">
				<div class="container">
					<div class="row justify-content-center generic-height align-items-center">
						<div class="col-lg-8">
							<div class="banner-content text-center">
								<span class="text-white top text-uppercase">Dinomuz Issue</span>
								<h1 class="text-white text-uppercase">Tasks Information</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sample-text-area">
				<div class="container">

						<h3 class="text-heading"> Table</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">#</div>
									<div class="visit">Task Title </div>
									<div class="visit">Assign To </div>
									<div class="visit">Owner </div>
									<div class="visit">Statuse</div>
									<div class="visit">Last Modify</div>
								</div>
								<a ng-repeat="t in tasks" href="taskDet.php?taskID={{t.id}}" >
									<div class="table-row h">
										<div class="serial">{{t.id}}</div>
										<div class="visit">{{t.title}}</div>
										<div class="visit">{{t.assignto}}</div>
										<div class="visit">{{t.owner}}</div>
										<div class="visit">{{t.status}}</div>
										<div class="visit">{{t.lastmodify}}</div>


									</div>
								</a>
				
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
	<script>
      	var app = angular.module('myApp', []);
     	app.controller('taskCtrl',function ($scope, $http) {
      		$http.get("getTask.php").then(function(response) {
        		$scope.tasks = response.data;
        		console.log($scope.tasks);
    		});
       
      		

      	});


  	</script>
</html>
