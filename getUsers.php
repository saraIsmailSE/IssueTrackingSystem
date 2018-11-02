<?php
    $postdata = file_get_contents("php://input");
	$request = json_decode($postdata);	
    $array= array();

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
	if (! empty($_POST['ID'])) {
		$id=$_POST["ID"];
	    $sql = "select * from user where id ='$id';";

	}
	else{
		$sql = "select username,lastname,type from user;";
	    //echo $sql;die();
	}  
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	    	$array [] = $row;
	    }
	        //print_r();
	    echo json_encode($array);
	    
	}
	else{
	    echo json_encode($array);
         
	}

	
	
?>