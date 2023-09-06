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

if(fetchIDByUsername($id)){echo $id;}
echo "<h1 style='color=white'>ID = $id</h1>
<h1 style='color=white'>". $username." = $username</h1>";
//addRoom($_COOKIE['id'],"Funky Room");

//Disconnect($conn);
?>
</body>