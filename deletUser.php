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
	$id= $_GET['id'];
    //echo $id;die();
	$sql = "delete from user where id='$id';";
	if ($conn->query($sql) === TRUE) {
	   header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/manageUser.php?sucsess= User Deleted");
	} 

	$conn->close();
?>