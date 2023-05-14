<?php
include("Credentials.php");

function CreateID($Username){
    return time()+ord($Username[0]);
}

$errMsg = "";
if (strlen($_POST['username'])<4) {  
    $errMsg = $errMsg."Username must have at least 4 characters! ";  
             //echo "<script>alert('$errMsg')</script>";  
             //header("Location: Register.html");
} 
    $Username = $_POST["username"];  
  

if (strlen($_POST['password'])<5) {  
    $errMsg = $errMsg."Password must have at least 5 characters! ";  
             //echo "<script>alert('$errMsg')</script>"; 
             //header("Location: Register.html");
} 
    $Password = $_POST["password"];  


if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {  
    $errMsg = $errMsg."Invalid E-Mail! ";  
             //echo "<script>alert('$errMsg')</script>";  
             //header("Location: Register.html");
}
    $Email = $_POST["email"];  

if($errMsg != ""){
    echo "<script>alert('Error: $errMsg'); location='Register.html';</script>";
    echo "I got here";
}

$userTaken = !UsernameAvailable($Username);
$emailTaken = !EmailAvailable($Email);

if($userTaken || $emailTaken){
    if($userTaken)
    echo "<script>alert('Error: Username Already Taken!'); location='Register.html';</script>";
    else
    echo "<script>alert('Error: Email Already Taken!'); location='Register.html';</script>";
}
else{
    if(!RegisterUser(CreateID($Username),$Username,$Password,$Email)){
    echo "<script>alert('Error: Failed to register user!'); location='Register.html';
    </script>";
    }else{
        include("../Session/CCookies.php");
        include("../Session/tokenizer.php");
        echo "<script>location='../index.php';</script>";

    }
}



print_r($_COOKIE);

?>
