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

	$id= $_POST['taskId'];
	$title= $_POST['title'];
	$assignTo= $_POST['assignTo'];
	$desc= $_POST['desc'];
	$owner=$_SESSION['user'];

	$sql ="update task set title ='$title' ,description = '$desc',assignto='$assignTo' where id= $id ;";
		if ($conn->query($sql) === TRUE) {
			header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/taskDet.php?sucsess= Task updated successfully");
    		
		} 
	 
		else {
			    echo "Error updating record: " . $conn->error;

		    // header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/editTask.php?error= enter valid information");
		}
	

	mysqli_close($conn);



?>
