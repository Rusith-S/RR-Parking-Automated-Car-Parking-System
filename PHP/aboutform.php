<?php
$Username = filter_input(INPUT_POST, 'User_Name');
$Email = filter_input(INPUT_POST, 'User_Email');
$Phone = filter_input(INPUT_POST, 'User_Phone');
$Question = filter_input(INPUT_POST, 'User_Question');
$Comment= filter_input(INPUT_POST, 'User_Comment');


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "rr_parkings";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO Aboutus_comments(Username,Email,Phone,Question,Comment)
values ('$Username','$Email','$Phone','$Question','$Comment')";
if ($conn->query($sql)){
echo "<h1>New record is inserted sucessfully</h1>";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

?>
