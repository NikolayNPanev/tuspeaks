<?php
$Username = $_COOKIE['username'];

include("../DBphp/Rooms.php");
	foreach($_COOKIE as $name => $password){
		$username = $name;
	}
	
include("Header.php");

$RoomID= $_GET['id'];
echo "<button><a href='Publish.php?id=$RoomID'>PUBLISH</a></button>";
  fetchPublicationsByRoomID($RoomID);
?>
