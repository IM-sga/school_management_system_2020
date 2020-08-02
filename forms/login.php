<?php
	require '../partials/head.php';
	require '../config/config.php'; 


 	if (isset($_POST['login'])) {
 		$username = $_POST['username'];
 		$birthdate = $_POST['bdate'];
 		$password = $_POST['password'];
 		
 		if ($_POST['category'] === 'student') {
 			$query= "SELECT * FROM `students` WHERE `username`= '".$username."' AND `birthdate`= '".$birthdate."' AND `password`= '".$password."'";
 		} else {
 		 	$query= "SELECT * FROM `teachers` WHERE `username`= '".$username."' AND `birthdate`= '".$birthdate."' AND `password`= '".$password."'";
 		}
 		
 		$query_run = mysqli_query($conn, $query);
		
 		if ($query_run->num_rows > 0) {
			$_SESSION['username']= $username;
			header('location: ../pages/dashboard.php');		
        } else {
            echo '<script type= "text/javascript"> alert ("Wrong Password") </script>';
        } 
    }   
 ?>