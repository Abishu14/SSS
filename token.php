<?php


	session_start(); 
	if((!isset($_SESSION["logined"])))
	{
		header("location:Login.php");
		exit();
	}
	if((isset($_POST["token"]))){
		echo $_SESSION["CSRF"];
	}
	
?>
