<?php
include("../DBphp/Rooms.php");
	foreach($_COOKIE as $name => $password){
		$username = $name;
	}
	
include("Header.php");


$PubID= $_GET['id'];
  fetchCommentsByPubID($PubID);
?>