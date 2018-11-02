<?php 
   $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dinomuz";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$name= $_POST['user_name'];
	$password= $_POST['pass_word'];
	



		$sql = "select username,password,type from user where username = '$name' and password ='$password'";
		$result = $conn->query($sql);
        //echo $result;die(); 
		if ($result->num_rows > 0) {
			session_start();
			$_SESSION['user']=$name;
            $row = $result->fetch_assoc();
            $_SESSION['type']=$row['type'];
            if($_SESSION['type'] == 'admin'){
            	header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/adminHome.php");
            }
            else{
				header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/userHome.php");
            }

		} else {
			//$_POST['error']='reEnter';
          header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/login.php?error= wrong user name or password");
		}
	

	$conn->close();
  
 ?>