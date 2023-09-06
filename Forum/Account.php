<?php
$ID = $_COOKIE['user_id'];

include("../DBphp/Rooms.php");
		$username = fetchUsernameByID($ID);
include("Header.php");

echo "<h3>user id:<br>".$ID."</h3><hr>";
fetchAccountInfo($ID);

?>
<form method="POST" action="EditBio.php">
	<?php
	echo"<input type='hidden' value='$ID' name='userid'>";?>
	<input type="submit" value="Update Bio"><br>
</form>