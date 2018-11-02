<?php

	session_start();
    unset($_SESSION["user"]);
    header("Location: http://localhost/IssueTrackingSystem/IssueTrackingSystem/home.php");
		
	
    
?>
