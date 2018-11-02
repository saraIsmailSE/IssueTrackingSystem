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
		$sql = "select * from task where id=$id ORDER BY lastmodify;";
		    //echo $sql;die();
		    //$query = mysql_query($sql);
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
	}
	else{
		$sql = "select * from task;";
		    //echo $sql;die();
		    //$query = mysql_query($sql);
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
	}	
	
	
?>