
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
	<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js'></script>
  	<script>
      var app = angular.module('myApp', []);
      app.controller('userCtrl',function ($scope, $http) {
        $scope.users=[];
        $scope.Uname='';
       
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
      });


  	</script>

    <body ng-app='myApp'>
		<?php include  'sessionCheck.php'; ?>
		<?php include  'headerM.php'; ?>

		<div class="main-wrapper-first" ng-controller='userCtrl'>
			
			<div class="banner-area">
				<div class="container">
					<div class="row justify-content-center height align-items-center">
						<div class="col-lg-8">
							<div class="banner-content text-center">
								<span class="text-white top text-uppercase">Dinomuz Issue</span>
								<h1 class="text-white text-uppercase">Search For a User </h1>
								
							<div class="story-box">
									<div class="mt-10">
										<input type="text" ng-model='Uname' ng-change='search()' name="user_name" placeholder="User Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'User Name '" required class="single-input">
									</div>
									<div class="sidebar-box">
										<h3 class="mb-20" style="color: #ffe6e6;"> 
										 </h3>
								
										<ul ng-repeat="u in users track by $index" style="font-size: 23px; list-style: none;">
											<li>
												<a style="text-decoration: underline; color: #ffe6e6;" href="viewInfo.php?id={{u.id}}"> {{u.type}} : {{u.username}} {{u.lastname}} </a>
											</li>

										</ul>
									
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
