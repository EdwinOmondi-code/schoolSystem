<?php
//set up variables to store your server details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

//create and execute connection based off creds
$conn = new mysqli($servername,$username,$password,$dbname);

// the connection 
if ($conn->connect_error) {
	# code...
	echo "connection failed <br> " . $conn->connect_error;
} 