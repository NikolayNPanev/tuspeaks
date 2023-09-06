<?php
//include("../DBphp/Disconnect.php");

$title = $_GET['title'];
$content = $_GET['content'];
$ID = $_GET["userid"];
$RoomID = $_GET['roomid'];

function createPublication($title,$content,$RoomID,$ID){
	include('../DBphp/bdc.php');
	$query="INSERT INTO publications (title,content,rooms_id,users_id) VALUES('$title','$content','$RoomID','$ID')";
	if(mysqli_query($conn, $query)){
    $result = $conn->query($query);
	}
	//Disconnect($conn);
}

createPublication($title,$content,$RoomID,$ID);
echo $RoomID." ".$ID." ".$title." ".$content;
//header("Location: Room.php?id=$RoomID");

?>