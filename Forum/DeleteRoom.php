<?php
$ID = $_POST["roomid"];

function deleteRoom($ID){
	include('../DBphp/bdc.php');
	$query="DELETE FROM rooms WHERE id = '$ID'";
	if(mysqli_query($conn, $query)){
    $result = $conn->query($query);
	}
	//Disconnect($conn);
}

deleteRoom($ID);
header("Location: Forum.php");
?>