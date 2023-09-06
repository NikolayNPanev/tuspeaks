<?php
$ID = $_POST["pubid"];

function deletePublication($ID){
	include('../DBphp/bdc.php');
	$query="DELETE FROM publications WHERE id = '$ID'";
	if(mysqli_query($conn, $query)){
    $result = $conn->query($query);
	}
	//Disconnect($conn);
}

deletePublication($ID);
header("Location: Forum.php");
?>