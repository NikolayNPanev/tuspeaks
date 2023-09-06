<?php
		$ID = $_COOKIE['user_id'];

include("../DBphp/Rooms.php");
		$username = fetchUsernameByID($ID);
include("Header.php");

echo "<h3>user id:<br>".$ID."</h3><hr>";
fetchAccountInfo($ID);
?>