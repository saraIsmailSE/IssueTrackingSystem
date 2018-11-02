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
	<title>Dinomuz Issue-Add Task</title>

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
  	<script>
      var app = angular.module('myApp', []);
      app.controller('userCtrl',function ($scope, $http) {
      	$scope.cars = [
        {model : "Ford Mustang", color : "red"},
        {model : "Fiat 500", color : "white"},
        {model : "Volvo XC90", color : "black"}
    ];
          $scope.cars.push({model: "Ford ", color: "red"});

        console.log($scope.cars);
        $scope.users=[];
        $scope.search=function(){
            $http.post('editUserController.php',{'Uname':$scope.Uname}).then(function (data){
	              //alert(data.data);
	             // console.log(data.data);
	             $scope.users = data.data;
	             console.log($scope.users);
          		},function (error){
              		console.log('error '+error);
            });

        };       



        
        //alert($scope.users.length);
        console.log($scope.users.length);
        console.log($scope.users);

      });


  	</script>
	<body ng-app= 'myApp'>
		<?php include  'sessionCheck.php'; ?>
		<?php 
			if ($_SESSION['type']=='admin') {
				include  'headerM.php';	
			}
			else{
				include  'headerU.php';
			}
			
		?>

		<div class="main-wrapper-first" >
			
			
			<div class="banner-area">
				<div class="container">
					<div class="row justify-content-center height align-items-center">
						<div class="col-lg-8">
							<div class="banner-content text-center">
								<span class="text-white top text-uppercase">Dinomuz Issue</span>
								<h1 class="text-white text-uppercase">Enter Task Information </h1>
								<div class="row justify-content-center align-items-center">
									<div class="col-lg-8 col-md-8 " >
										<form action="addTaskController.php" method="POST">
											<div class="mt-10">
												<input type="text" name="title" id="title" placeholder="Task Title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Task Title'" required class="single-input">
											</div>
							
											<div class="mt-10">
												<input type="text" ng-model='Uname' ng-change='search()' name="assignTo"  id="assignTo" placeholder="Assign To" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
											</div>
											<div class="mt-10">
												<textarea class="single-textarea" name="desc" placeholder="Task Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Task Description'" required></textarea>
											</div>

							
								</div>
									</div>
											<br> <br>
 											<input type="submit" class="genric-btn success-border circle arrow" value='Add Task'>
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
