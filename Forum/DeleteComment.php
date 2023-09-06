<?php
$ID = $_GET["comid"];

function deleteComment($ID){
	include('../DBphp/bdc.php');
	$query="DELETE FROM comments WHERE id = '$ID'";
	//if(mysqli_query($conn, $query)){
   	$conn->query($query);
	//}
	//Disconnect($conn);
}

deleteComment($ID);
header("Location: Forum.php");
?>