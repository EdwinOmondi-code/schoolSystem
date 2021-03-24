<?php
session_start();
include '../connection.php';


//variables to store input

$usernames = $email = $password = $encrypted_pass = '';
$usernameErr = $emailErr = $passwordErr = '';


//SESSION VARIABLES
$_SESSION ['userRegistered'] = "Registration successful";
$_SESSION ['notRegistered'] = "Registration not successful";
$_SESSION ['classTypeSuccess'] = "success";
$_SESSION ['classTypeError'] = "danger";

//users input

 if (isset($_POST['save'])) {
 	# code...

 		if (empty($_POST['usernames'])) {
 			# code...
 			$usernameErr = "username is required";
 		} else {
 			$usernames = $_POST ['username'];
 		}


 			if (empty($_POST['email'])) {
 			# code...
 			$emailErr = "email is required";
 		} else {
 			$email = $_POST ['email'];
 		}


 			if (empty($_POST['password'])) {
 			# code...
 			$passwordErr = "password is required";
 		} else {
 			$password = $_POST ['password'];

 			//enryption of password
 			$encrypted_pass = md5($password);
 		}


 		if (empty($usernameErr) && empty($emailErr) && empty ($passwordErr)) {
 			# code...
 			$stmt = $conn_>prepare ("INSERT INTO users(usernames, email, password) VALUES (?,?,?)");
 			$stmt->bind_param("sss", $usernames,$email,$password);

 			// if ($stmt->execute()===TRUE) {
 			// 	# code...
 			// 	$_SESSION['userRegistered'];
 			// 	$_SESSION['classTypeSuccess'];
 			// 	header ('location:../index.php?registered=true')

 			// } else {

 			// 	$_SESSION['notRegistered'];
 			// 	$_SESSION['classTypeError'];
 			// 	header ('location:../index.php?notreg=false')
 			// }
 		}


 }

?>