<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$message = $_POST['message'];

    // Database connection
    $conn = new mysqli('localhost','root','','rr_parkings');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$ection = $conn->prepare("insert into  detail(name, email, contact, message) values(?, ?, ?, ?)");
		$ection->bind_param("ssis", $name, $email, $contact, $message);
		$execval = $ection->execute();
		echo $execval;
		echo "Form submitted successfully...";
		$ection->close();
		$conn->close();
	}
?>  
