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

	$Uname= $_POST['Uname'];
	$Lname= $_POST['Lname'];
	$Utype= $_POST['Utype'];
	$full=$Uname.$Lname;
	$password =substr(sha1($full, False),8,8);
	$id= substr(sha1($full, False),8,9);
	//$email=$Uname.substr($id,5)."@DI.com";
	$email='someone.sa96@outlook.sa ';  
	   
	$sqlExist = "select * from user where id = '$id';";
	$result = $conn->query($sqlExist);

	if ($result->num_rows > 0) {
		echo "string";
	    header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/addUser.php?error= User Exist");
    }
	else{
		$sql ="insert into user (id, username, lastname,password,type,tasks, email) values ('$id','$Uname','$Lname','$password','$Utype','','$email')";

		if (mysqli_query($conn, $sql)) {
	   header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/viweUser.php");
		}
	 
		else {
		    header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/addUser.php?error= enter valid information");
		}
	}

	mysqli_close($conn);



?>
