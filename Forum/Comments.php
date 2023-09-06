<?php
include("../DBphp/Rooms.php");
	
$ID = $_COOKIE["user_id"];
$username = fetchUsernameByID($ID);
include("Header.php");

	foreach($_COOKIE as $name => $password){
		$username = $name;
	}

$PubID= $_GET['id'];
  fetchCommentsByPubID($PubID);
?>