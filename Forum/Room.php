<?php
$username = $_COOKIE['user_name'];

include("../DBphp/Rooms.php");
	foreach($_COOKIE as $name => $password){
		$Username = $name;
	}
	
include("Header.php");

$RoomID= $_GET['id'];
echo "<br><br><hr><button><a href='Publish.php?id=$RoomID'>PUBLISH</a></button><hr>";
fetchPublicationsByRoomID($RoomID);
?>
