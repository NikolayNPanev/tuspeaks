<?php
		$ID = $_COOKIE['ID'];
		$username = $_COOKIE['username'];

include("Header.php");
include("../DBphp/Rooms.php");

echo "<h3>".$ID."</h3>";
fetchAccountInfo($ID);
?>