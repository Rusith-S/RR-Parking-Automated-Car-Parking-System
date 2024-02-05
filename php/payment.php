<?php

    $name = $_POST['cardholder'];
    $cNumber = $_POST['card-number'];
    $amount = $_POST['Pamount'];
    $expMonth = $_POST['months'];
    $expYear = $_POST['years'];
    $cvvNo = $_POST['CVV'];


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
		$stmt = $con->prepare("insert into  payment(cardHolder , cardNumber , amount , month , year , cvv ) values(?, ?, ?, ? ,? ,?)");
		$stmt->bind_param("sidsii", $name,  $cNumber, $amount,  $expMonth , $expYear , $cvvNo);
		$stmt->execute();
		echo "<h1>...Your payment done successfully...</h1>";
		$stmt->close();
		$con->close();
	}
?>
