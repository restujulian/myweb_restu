<?php
	session_start();
	if (isset($_SESSION['role'])) {
		if (isset($_GET)) {
			include "../home.php";
		} else {
			header('location:../index.php');
		}
		
	} else {
		header('location:../index.php');
	}
	
?>