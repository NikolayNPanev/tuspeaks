<?php
include("../DBphp/Rooms.php");
$ID = $_COOKIE['user_id'];
$username = fetchUsernameByID($ID);
$Bio = fetchBio($ID);
include("Header.php");
?>

<form method="POST" action="UpdateBio.php">
	<label>BIO</label><br>
	<?php 
	echo "<textarea  rows='15' cols='30' name='bio'>$Bio</textarea><br>";
	echo"<input type='hidden' value='$ID' name='userid'>";?>
	
	<input type="submit" value= "Update Bio"><br>
</form>