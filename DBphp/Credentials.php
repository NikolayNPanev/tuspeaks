<?php

function UsernameAvailable($Username){
	include("bdc.php");

	 //Ask the database for the entry with that username
  $query = "SELECT * FROM users WHERE username='$Username';";
  if(mysqli_query($conn, $query)){
    //Get what the database has answered
    $result = $conn->query($query);
    //If there is an entry with that username,
    //disconnect and return false
    if ($result->num_rows > 0)
    {
      return 0;
    }
  }

  //If the username is not taken yet,
  //disconnect and return true
  return 1;
}

function EmailAvailable($Email){
	include("bdc.php");

	 //Ask the database for the entry with that email
  $query = "SELECT * FROM users WHERE email='$Email';";
  if(mysqli_query($conn, $query)){
    //Get what the database has answered
    $result = $conn->query($query);
    //If there is an entry with that email,
    //disconnect and return false
    if ($result->num_rows > 0)
    {

      return 0;
    }
  }
  //If the email is not used yet,
  //disconnect and return true

  return 1;
}

function RegisterUser($ID,$Username,$Password,$Email){
    
  //database credentials
  include("bdc.php");
  $sql = "INSERT INTO users(id,username,password,email) VALUES('$ID','$Username','$Password','$Email')";

  //On a successfull insert
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    return 1;
  } 
  //On a failed insert
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    return 0;
  }

}

function CheckPassword($Username,$Password){

  
  //database credentials
  include("bdc.php");
  //Ask the database for the entry with these username and password
  $query = "SELECT * FROM users WHERE username='$Username' AND password='$Password';";
  if(mysqli_query($conn, $query)){
    //Get what the database has answered
    $result = $conn->query($query);

    //If there is and entry with these username and password,
    //disconnect from the database and return true(1)
    if ($result->num_rows > 0)
    {

      return 1;
    }
  }
  //if there isn't a user like this or the password doesn't match,
  //disconnect and return false(0)

  return 0;
}
?>