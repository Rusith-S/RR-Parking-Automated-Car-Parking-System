<?php

    $user_Name = $_POST['Username'];
    $name = $_POST['Name'];
    $email = $_POST['E-mail'];
    $confirmPassword = $_POST['Confirm-Password'];
    $mobileNo = $_POST['Mobile-Number'];



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
		$stmt = $con->prepare("insert into  sign_up(user_Name , name , email , password , mobile_Number ) values(?, ?, ?, ?, ? )");
		$stmt->bind_param("sssss", $user_Name  , $name  , $email  , $confirmPassword , $mobileNo );
		$stmt->execute();
		echo "<h1>...Your details added succesfully...</h1>";
		$stmt->close();
		$con->close();
	}
?>