<?php

    $customerName = $_POST['customer-name'];
    $email = $_POST['E-mail'];
    $customerReview = $_POST['Comment'];



    // Database connection

    $sereverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "rr_parkings";

    $con = new mysqli( $sereverName,$userName, $password, $dbName);



    //check conection
    if($con->connect_error)
    {
        die("Connection Failed : ". $con -> connect_error);
    }

    else 
    {
		$stmt = $con->prepare("insert into customer_reviews(customerName , email  , comment) values(?, ?, ?)");
		$stmt->bind_param("sss",  $customerName, $email,  $customerReview);
		$stmt->execute();
		echo "<h1>...Thank you!...<br>...Your review added successfully...</h1>";
		$stmt->close();
		$con->close();
	}
?>
