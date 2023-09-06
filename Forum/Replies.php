<?php
include("../DBphp/Rooms.php");
$ID = $_COOKIE["user_id"];
$username = fetchUsernameByID($ID);	
include("Header.php");

	foreach($_COOKIE as $name => $password){
		$username = $name;
	}
$ComID= $_GET['id'];
?>
<form method="POST" action="CreateReply.php">
  <br><label>Reply</label><br>
  <textarea  rows="15" cols="30" name="content" placeholder="reply"></textarea><br>
  <?php
  echo "<input type='hidden' value='$ComID' name='comid'>";
  echo "<input type='hidden' value='$ID' name='userid'>";
  //echo "<input type='hidden' value='$ID' name='userid'>";
  echo "<input type='submit' value='Reply to Comment'><br>";
  echo "</form>";
  fetchRepliesByCommentID($ComID);
?>