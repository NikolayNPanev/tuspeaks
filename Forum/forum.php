<?php
$username = $_COOKIE["user_name"];
$id= $_COOKIE["user_id"];
	
include("Header.php");

include("../DBphp/Rooms.php");

$result = fetchRooms();

//include("../DBphp/bdc.php");
/*foreach($result as $room){
	$row = mysqli_fetch_row($result);
	//echo $row[1];
}*/
//include("../DBphp/Rooms.php");
//addRoom($_COOKIE['id'],"Funky Room");

//Disconnect($conn);
?>
</body>