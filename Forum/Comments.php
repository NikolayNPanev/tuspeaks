<?php
include("../DBphp/Rooms.php");
	foreach($_COOKIE as $name => $password){
		$username = $name;
	}
	
	?>

<html>
<head>
  <link rel="stylesheet" href="../CSS/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Room: <?php echo fetchRoomByID($_GET['id'])?></title>
</head>


<body id="body">
<div class="navbar">
<ul>
  <h1>TU Speaks - <?php echo $username?></h1>
  <div class="navmenu">
  <li><a>...</a></li>
  <li><a href="../Session/Logout.php">Log Out</a></li>
  <li><a href="#body">Account</a></li>
  <li><a href="#body">Create Room</a></li>
  <li><a href="forum.php">Home</a></li>
  </div>
</ul>
</div>
<br>

<?php
$PubID= $_GET['id'];
  fetchCommentsByPubID($PubID);
?>