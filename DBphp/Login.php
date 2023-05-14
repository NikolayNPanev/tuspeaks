<?php
	include("Credentials.php");
	$Username = $_POST['username'];
	$Password = $_POST['password'];

	$UserExists = !UsernameAvailable($Username);
	$CorrectPassword = CheckPassword($Username,$Password);

	if(!$UserExists || !$CorrectPassword){
		if(!$UserExists)
			echo "<script>alert('Error: User Doesn't Exist!'); location='../index.php';</script>";
		else
			echo "<script>alert('Error: Wrong Password!'); location='../index.php';</script>";
	}
	else{
		include("../Session/tokenizer.php");
		echo "<script>location='../index.php';</script>";
	}

?>