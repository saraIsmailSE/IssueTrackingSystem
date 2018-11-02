<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	//Load Composer's autoloader
	require 'C:\Users\someO\vendor\autoload.php';

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
	$task = explode(",",$_GET['btn']);
	$status=strtolower($task[0]);
	if ($status == 'reopen') {
		$status='open';
	}
	$id=$task[1];
	$sqlOldSts="select title, status from task where id=$id;";
		$result = $conn->query($sqlOldSts);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
            $title=$row['title'];
            $oldSts=$row['status'];
        }
	
	$sql = "update task set status='$status' where id= $id ;";
	if ($conn->query($sql) === TRUE) {
		$sqlSelect="select email from user where (type ='qa' or type='pm');";
		$result = $conn->query($sqlSelect);
		if ($result->num_rows > 0) {
			while($row = mysqli_fetch_assoc($result)) {
		    	$email [] = $row;
		    }
		    $mail = new PHPMailer(true); 
			try {
			    $mail->SMTPDebug = 2;
			    $mail->isSMTP(); 
			    $mail->Host = 'smtp.gmail.com'; 
			    $mail->SMTPAuth = true; 
			    $mail->Username = 'someone.sa96@gmail.com';
			    $mail->Password = 'pdBuy6td';
			    $mail->SMTPSecure = 'tls';
			    $mail->Port = 587;

			    $mail->setFrom('saraismailse@gmail.com', 'Sara');
			     foreach( $email as $value){
			     	$mail->addAddress($value['email']);
		   		 }
			    $mail->isHTML(true); 
			    $mail->Subject = 'Task Status Have Been Updated';
			    $msg='Good Evening: </br> We would like to inform you that the status for task number :'.$id.', titled :"' . $title.'", have been changed from : " '.$oldSts.'" To : "'.$status.' "';
			    $mail->Body    = $msg;
			    $mail->AltBody = $msg;

			    $mail->send();
			    header("Location: http://localhost/IssueTrackingsystem/IssueTrackingsystem/taskDet.php?sucsess= an email Have been sent to the project manager and quality assurance team to inform them that the task status have been updated ");
			} catch (Exception $e) {
			    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
		}

	} else {
   		echo "Error updating record: " . $conn->error;
	}

	$conn->close();
?>