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

	$id= $_POST['id'];
	$username= $_POST['username'];
	$lastname= $_POST['lastname'];
	$type= $_POST['type'];
	$email= $_POST['email'];
	$sql ="update user set username ='$username' ,lastname = '$lastname',type='$type', email='$email' where id= '$id' ;";
		if ($conn->query($sql) === TRUE) {
			header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/manageUser.php?sucsess= User Information updated successfully");
    		
		} 
	 
		else {
			    echo "Error updating record: " . $conn->error;

		    // header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/editTask.php?error= enter valid information");
		}
	

	mysqli_close($conn);



?>
