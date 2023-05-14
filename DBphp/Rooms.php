<?php

/////////////
//         //
//  ROOMS  //
//         //
/////////////
function fetchRooms(){
	include("bdc.php");

	$query="SELECT * FROM rooms";
	$result;

	if(mysqli_query($conn, $query)){
    //Get what the database answered
    $result = $conn->query($query);
	}
	echo"<div class='roomlinks'>";
	foreach($result as $room){
		echo "<h2><a href='../Forum/Room.php?id=".$room['id']."'>".$room["title"]."</a></h2><br>";

	}
	echo"</div>";
    return $result;

    Disconnect($conn);
}

function fetchRoomByID($ID){
	include('bdc.php');
	$query="SELECT * FROM rooms WHERE id=$ID";
	if(mysqli_query($conn, $query)){
    //Get what the database answered
    $result = $conn->query($query);
    	foreach($result as $room){
			return $room['title'];
		}

	}
}


////////////////////
//                //
//  PUBLICATIONS  //
//                //
////////////////////

function fetchPublicationsByRoomID($RoomID){
	include('bdc.php');
	$query="SELECT * FROM publications WHERE rooms_id=$RoomID";
	if(mysqli_query($conn, $query)){
    //Get what the database answered
    $result = $conn->query($query);
    	foreach($result as $publication){
			echo "<h2><a href='../Forum/Publication.php?id="
			.$publication['id']."'>"
			.$publication['title']."</a></h2><br>";
		}

	}
}

function fetchPublicationByID($PubID){
	include('bdc.php');
	$query="SELECT * FROM publications WHERE id=$PubID";
	if(mysqli_query($conn, $query)){
    //Get what the database answered
    $result = $conn->query($query);
    	foreach($result as $publication){
			echo "<h1>Title: "
			.$publication['title']."</a></h1><br>
			<h3>".$publication['content']."</h3>";
			echo "<br><h4><a href='Comments.php?id=".$publication['id']."'>Comments</a></h4><br>";
		}

	}
}

///////////////
//           //
// COMMENTS  //
//           //
///////////////

function fetchCommentsByPubID($PubID){
	include('bdc.php');
	$query="SELECT * FROM comments WHERE publications_id=$PubID";
	if(mysqli_query($conn, $query)){
    //Get what the database answered
    $result = $conn->query($query);
    	foreach($result as $comment){
			echo "<h3>User: ".fetchUsernameByID($comment['users_id'])."</h3><br>
			<h3>".$comment['content']."</h3>";
			echo "<br><h4><a href='Replies.php?".$comment['id']."'>Replies</a></h4><hr>";
		}

	}
}


//////////////
//			//
// USERNAME //
//          //
//////////////

function fetchUsernameByID($ID){
	include('bdc.php');

	$query="SELECT * FROM users WHERE id=$ID";
	$result;

	if(mysqli_query($conn, $query)){
    //Get what the database answered
    $result = $conn->query($query);
	}

	echo "<div class='publinks'>";
	foreach($result as $user){
		return $user["username"];

	}
	echo"</div>";
    Disconnect($conn);
}
?>