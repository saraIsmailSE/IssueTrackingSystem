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
    if(!empty($request->Uname)){
    	$Uname = $request->Uname;
	    $sql = "select id,username,lastname,type from user where username LIKE '%$Uname%'";
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
	} else {
	        echo json_encode($array);
          
		}

	
	
?>