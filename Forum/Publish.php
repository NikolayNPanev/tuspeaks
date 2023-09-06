<?php
$username = $_COOKIE['username'];
$ID= $_COOKIE['ID'];
include("Header.php");
$RoomID=$_GET['id'];

echo $ID;
echo $RoomID;
echo $username;
?>

<form method="GET" action="CreatePublication.php">
	<label>Title</label><br>
	<input type="text" name="title" placeholder="publication title"></title><br>
	<label>Contents</label><br>
	<textarea  rows="15" cols="30" name="content" placeholder="publication"></textarea><br>
	<?php
	echo "<input type='hidden' value='$RoomID' name='roomid'>";
	echo "<input type='hidden' value='$ID' name='userid'>";
	?>
	<input type="hidden" value= "<?php $ID ?>" name="userid">
	<input type="submit" value= "Publish post"><br>
</form>