<?php


include("../DBphp/Rooms.php");
$RoomID= $_GET['id'];
$ID = $_COOKIE["user_id"];
$username = fetchUsernameByID($ID);
	
include("Header.php");

	foreach($_COOKIE as $name => $password){
		$username = $name;
	}
  fetchPublicationByID($RoomID);
?>

