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
	$id= $_GET['taskID'];
    //echo $id;die();
	$sql = "delete from task where id=$id;";
	if ($conn->query($sql) === TRUE) {
	   header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/taskDet.php?sucsess= Task Deleted");
	} 

	$conn->close();
?>