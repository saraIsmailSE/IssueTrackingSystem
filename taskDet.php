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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js'></script>
  	<style>
  		.h:hover {
    		background-color: #ffe6e6;
		}
  	</style>
	<body>
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

	            if(!empty($_GET['sucsess'])){
	                $message =$_GET['sucsess'];
	                
	                echo '<script type="text/javascript"> swal("success","'.$message.'","success").then((value) => {
	                if (value) {
	                	window.location.href="viewTask.php ";

	          		}
	          		else{
	            		window.location.href="viewTask.php ";
	          		}
	            	});
	            	</script>';
	            }  
          ?>
		<?php 
	      if(!empty($_GET['taskID'])){
	        $id =$_GET['taskID'];
	        $owner=$_SESSION['user'];
	        echo "<script> 
	         $.ajax({
	            method: 'POST',
	            url: 'http://localhost/IssueTrackingsystem/IssueTrackingsystem/getTask.php',
	            data:{ID: '$id'}
	          }).done(function( Info ) {
	            var obj = JSON.parse(Info);
	            switch(obj[0].status) {
				    case 'open':
				    	document.getElementById('btn1').style.display ='block';
				    	document.getElementById('btn1').value ='RESOLVE';
	            		document.getElementById('btn2').style.display ='block';
	            		document.getElementById('btn2').value ='CLOSE';	
	            	break;
				    case 'resolve':
				        document.getElementById('btn1').style.display ='block';
				    	document.getElementById('btn1').value ='REOPEN';
	            		document.getElementById('btn2').style.display ='block';
	            		document.getElementById('btn2').value ='CLOSE'; 
				    break;
				    case 'close':
				    	
				    	document.getElementById('btn1').style.display ='block';
				    	document.getElementById('btn1').value ='OPEN';
	            		document.getElementById('btn2').style.display ='none';
				    break;
				}
				if(obj[0].owner == '$owner' || '$owner' == 'admin'  ){
					
				 	document.getElementById('showDel').style.display ='block';

				}
	            document.getElementById('taskTitle').innerHTML = obj[0].title;
	            var str1='Written BY : ';
	            var str2='Assigned To : ';
	            var owner=str1.concat(obj[0].owner);
	            var assignTo=str2.concat(obj[0].assignto);
	            var subTitle=owner.concat( ' ,  ', assignTo);
	            document.getElementById('taskTitle').innerHTML =obj[0].title;
	            document.getElementById('subTitle').innerHTML =subTitle;
	            var LM='Last Modify : ';
	            var lastmodify= LM.concat(obj[0].lastmodify);
	            document.getElementById('lastmodify').innerHTML=lastmodify;  
	            document.getElementById('desc').innerHTML = obj[0].description;
	            console.log(Info);
	          });
	          $(document).ready(function(){
			    $('#btn1').click(function(){
			       var val =document.getElementById($(this).attr('id')).value ;
			       var location='http://localhost/IssueTrackingSystem/IssueTrackingSystem/changeStatus.php?btn='+val+','+'$id';
			       window.location.replace(location);
			    });
			     $('#btn2').click(function(){
			       var val =document.getElementById($(this).attr('id')).value ;
			       var location='http://localhost/IssueTrackingSystem/IssueTrackingSystem/changeStatus.php?btn='+val+','+'$id';
			       window.location.replace(location);
			    });

   				$('#showDel').click(function(){
    				swal('warning','Are you sure you want to delete this task?.','warning').then((value) => {
	                if (value) {
	               	window.location.href='deletTask.php?taskID=$id';
	          		}
	          		else{	            		
	            		window.location.href='taskDet.php?taskID=$id';
	          		}
	            	});
				});
				$('#EDIT').click(function(){	
	               	window.location.href='EditTask.php?taskID=$id';
				});
			});

	        </script>";
	      }
      
        ?>
		<div class="main-wrapper-first">
			<div class="banner-area">
				<div class="container">
					<div class="row justify-content-center generic-height align-items-center">
						<div class="col-lg-8">
							<div class="banner-content text-center">
								<span class="text-white top text-uppercase">Dinomuz Issue</span>
								<h1 class="text-white text-uppercase">Task details</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="sample-text-area">
				<div class="container">
					<h3 class="text-heading" id="taskTitle"></h3>
					<p class="sample-text" id="subTitle"></p>
					<p class="sample-text" id="lastmodify"></p>
					<p class="sample-text" style="border-radius: 15px 50px; padding:20px; background: #f2edec" id="desc">		
					</p>

						

				</div>
				<div class="button-group-area mt-40 row justify-content-center align-items-center">
					<input type="button" id="btn1" name="btn" class="genric-btn success circle arrow">
					<input type="button" name="btn" id='btn2' class="genric-btn success circle arrow">
					<input type="button" name="btn" id='EDIT' value="EDIT" class="genric-btn success circle arrow">
					<input type="button" name="btn" id='showDel' value="DELETE" class="genric-btn success circle arrow" style="display: none">
				</div>
			</section>				
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
