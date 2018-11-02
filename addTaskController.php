<?php
    session_start();
	
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

	$title= $_POST['title'];
	$assignTo= $_POST['assignTo'];
	$desc= $_POST['desc'];
	$owner=$_SESSION['user'];

	$sql ="insert into task (title,description,owner,assignto) values ('$title','$desc','$owner','$assignTo')";

		if (mysqli_query($conn, $sql)) {
	   header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/adminHome.php");
		}
	 
		else {
		    header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/addTask.php?error= enter valid information");
		}
	

	mysqli_close($conn);



?>
