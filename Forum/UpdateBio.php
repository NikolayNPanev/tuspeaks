<?php
include("../DBphp/Rooms.php");
$ID = $_POST["userid"];
$Bio = $_POST["bio"];

function updateBio($Bio,$ID){
	include('../DBphp/bdc.php');
	$query="UPDATE user_bios
	SET content = '$Bio'
	WHERE users_id = '$ID'";
	if(mysqli_query($conn, $query)){
    $result = $conn->query($query);
	}
	//Disconnect($conn);
}

updateBio($Bio,$ID);
echo $ComID." ".$ID." ".$content;
header("Location: Account.php?id=$ID");
?>