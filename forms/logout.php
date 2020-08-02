<?php
	if (isset($_POST['logout']))
	{
		session_destroy();
		header('location: ../pages/imlogin.php');	 		
	}
?>