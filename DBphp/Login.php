<?php
	include("Credentials.php");
	$Uname = $_POST['username'];
	$Password = $_POST['password'];

	$UserExists = !UsernameAvailable($Uname);
	if(!$UserExists){
		echo "<script>alert('Error: Username doesn\'t exist!'); location='../index.php'</script>";
		include("../Session/CCookies.php");
	}
	else{
		include("../DBphp/Rooms.php");
		$CorrectPassword = CheckPassword($Uname,$Password);
		if(!$CorrectPassword){
			echo "<script>alert('Error: Wrong Password!'); location='../index.php'</script>";
			include("../Session/CCookies.php");
		}
		else{

			//$ID = fetchIDByUsername($Username);
			include("../Session/tokenizer.php");
			echo "<script>location='../index.php';</script>";
		}
	}



?>