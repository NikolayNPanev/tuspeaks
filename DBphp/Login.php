<?php
	include("Credentials.php");
	$Username = $_POST['username'];
	$Password = $_POST['password'];

	$UserExists = !UsernameAvailable($Username);
	if(!$UserExists){
		echo "<script>alert('Error: Username doesn\'t exist!'); location='../index.php'</script>";
	}
	else{
		echo "I got there";
		$CorrectPassword = CheckPassword($Username,$Password);
		if(!$CorrectPassword){
			echo "<script>alert('Error: Wrong Password!'); location='../index.php'</script>";
		}
		else{
			include("../Session/tokenizer.php");
			echo "<script>location='../index.php';</script>";
		}
	}

?>