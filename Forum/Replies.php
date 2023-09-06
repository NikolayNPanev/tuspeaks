<?php
include("../DBphp/Rooms.php");
	foreach($_COOKIE as $name => $password){
		$username = $name;
	}
	
include("Header.php");

$ComID= $_GET['id'];
  fetchRepliesByCommentID($ComID);
?>