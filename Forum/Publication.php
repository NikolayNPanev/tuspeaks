<?php
include("../DBphp/Rooms.php");
	foreach($_COOKIE as $name => $password){
		$username = $name;
	}
	
include("Header.php");

$RoomID= $_GET['id'];
  fetchPublicationByID($RoomID);
?>

