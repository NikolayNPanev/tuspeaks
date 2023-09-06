<?php
include("../DBphp/Rooms.php");
$ID = $_COOKIE['user_id'];
$username = fetchUsernameByID($ID);
include("Header.php");
?>

<form method="POST" action="SubmitRoom.php">
	<label>Room Name</label><br>
	<input type="text" name="roomname" placeholder="roomname"></input><br>
	<?php echo"<input type='hidden' value='$ID' name='userid'>";?>
	
	<input type="submit" value= "Create Room"><br>
</form>