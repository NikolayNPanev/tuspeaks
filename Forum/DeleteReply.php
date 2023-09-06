<?php
$ID = $_POST["repid"];

function deleteReply($ID){
	include('../DBphp/bdc.php');
	$query="DELETE FROM replies WHERE id = '$ID'";
	//if(mysqli_query($conn, $query)){
   	$conn->query($query);
	//}
	//Disconnect($conn);
}

deleteReply($ID);
header("Location: Forum.php");
?>