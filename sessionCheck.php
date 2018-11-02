<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <?php 
     
     session_start();
     if(empty($_SESSION['user'])) {

   //echo "string"; die();
    echo '<script type="text/javascript"> 
    swal("please login","you must login to do this action ","error").then((value) => { if (value) { window.location.href="login.php "; } else{ window.location.href="login.php "; } }); </script>'; 
     die(); 
    }

  ?>
</body>
</html>