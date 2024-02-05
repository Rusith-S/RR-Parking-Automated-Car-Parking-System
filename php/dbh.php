<?php

$conn = mysqli_connect('localhost', 'root', '', 'rr_parkings');


if (!$conn) {
die("Connection failed:" .mysqli_connect_error());

}