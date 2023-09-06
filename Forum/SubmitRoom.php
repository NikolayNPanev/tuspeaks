<?php
$ID = $_POST["userid"];
$RoomName = $_POST['roomname'];

function createRoom($RoomName,$ID){
	include('../DBphp/bdc.php');
	$query="INSERT INTO rooms(title,users_id) VALUES('$RoomName', '$ID')";
	if(mysqli_query($conn, $query)){
    //$result = $conn->query($query);
	}
	//Disconnect($conn);
}

createRoom($RoomName,$ID);
header("Location: Forum.php");
?>