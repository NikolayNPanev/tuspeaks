<?php
include("../DBphp/Rooms.php");
	
$ID = $_COOKIE["user_id"];
$username = fetchUsernameByID($ID);
$PubID = $_GET["id"];
include("Header.php");

	foreach($_COOKIE as $name => $password){
		$username = $name;
	}

?>
<form method="POST" action="CreateComment.php">
  <br><label>Comment</label><br>
  <textarea  rows="15" cols="30" name="content" placeholder="comment"></textarea><br>
  <?php
  echo "<input type='hidden' value='$PubID' name='pubid'>";
  echo "<input type='hidden' value='$ID' name='userid'>";
  //echo "<input type='hidden' value='$ID' name='userid'>";
  echo "<input type='submit' value='Submit Comment'><br>";
  fetchCommentsByPubID($PubID);
?>
</form>