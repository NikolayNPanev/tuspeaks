<?php
/////////////
//         //
// REPLIES //
//         //
/////////////

function fetchRepliesByCommentID($ComID){
	include("Disconnect.php");
	include('bdc.php');
	$query="SELECT * FROM replies WHERE comments_id=$ComID";
	if(mysqli_query($conn, $query)){
    //Get what the database answered
    $result = $conn->query($query);
    	foreach($result as $reply){
			echo "<h3>User ".fetchUsernameByID($reply['users_id'])." replied:</h3><br>
			<h3>".$reply['content']."</h3><hr>";
			//echo "<br><h4><a href='Replies.php?".$reply['id']."'>Replies</a></h4><hr>";
			$repid = $reply['id'];
			if($_COOKIE['user_id']==$reply['users_id']){
				echo "<form action='DeleteReply.php' method='POST'>
					<input type='hidden' name='repid' value='$repid'>
					<input type='submit' value='DELETE'></input>
				</form>";
			}
			echo "<hr>";
		}
	}
	Disconnect($conn);

}

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
		echo "<h2><a href='Room.php?id=".$room['id']."'>".$room["title"]."</a></h2>";
		$rid=$room['id'];
		if($_COOKIE['user_id']==$room['users_id']){
			echo "<form action='DeleteRoom.php' method='POST'>
					<input type='hidden' name='roomid' value='$rid'>
					<input type='submit' value='DELETE'></input>
				</form>";
		}
		echo "<hr>";
	}
	echo"</div>";
    return $result;

    Disconnect($conn);
}

function fetchRoomByID($ID){
	include("Disconnect.php");
	include('bdc.php');
	$query="SELECT * FROM rooms WHERE id=$ID";
	if(mysqli_query($conn, $query)){
    //Get what the database answered
    $result = $conn->query($query);
    	foreach($result as $room){
			return $room['title'];
		}
	}
	Disconnect($conn);
}

function addRoom($userID,$RoomName){
	$query="INSERT INTO rooms(title,users_id) VALUES($RoomName,$userID)";
	if(mysqli_query($conn, $query)){
		}
	}



////////////////////
//                //
//  PUBLICATIONS  //
//                //
////////////////////

function fetchPublicationsByRoomID($RoomID){
	include("Disconnect.php");
	include('bdc.php');
	$query="SELECT * FROM publications WHERE rooms_id=$RoomID";
	if(mysqli_query($conn, $query)){
    //Get what the database answered
    $result = $conn->query($query);
    	foreach($result as $publication){
			echo "<h2><a href='../Forum/Publication.php?id="
			.$publication['id']."'>"
			.$publication['title']."</a></h2><br>";
			$pid = $publication['id'];
			if($_COOKIE['user_id']==$publication['users_id']){
			echo "<form action='DeletePublication.php' method='POST'>
					<input type='hidden' name='pubid' value='$pid'>
					<input type='submit' value='DELETE'></input>
				</form>";
		}
		echo "<hr>";
		}
	}
	Disconnect($conn);
}

function fetchPublicationByID($PubID){
	include("Disconnect.php");
	include('bdc.php');
	$query="SELECT * FROM publications WHERE id=$PubID";
	if(mysqli_query($conn, $query)){
    //Get what the database answered
    $result = $conn->query($query);
    	foreach($result as $publication){
			echo "<br>posted by: ".fetchUsernameByID($publication['users_id'])."<br>"."<h1>Title: "
			.$publication['title']."</a></h1><br>
			<h3>".$publication['content']."</h3>";
			echo "<br><h4><a href='Comments.php?id=".$publication['id']."'>Comments</a></h4><br>";
		}
	}
	Disconnect($conn);
}

///////////////
//           //
// COMMENTS  //
//           //
///////////////

function fetchCommentsByPubID($PubID){
	include("Disconnect.php");
	include('bdc.php');
	$query="SELECT * FROM comments WHERE publications_id=$PubID";
	if(mysqli_query($conn, $query)){
    //Get what the database answered
    $result = $conn->query($query);
    	foreach($result as $comment){
			echo "<h3>User: ".fetchUsernameByID($comment['users_id'])."</h3><br>
			<h3>".$comment['content']."</h3>";
			echo "<br><h4><a href='Replies.php?id=".$comment['id']."'>Replies</a></h4>";
			$comid = $comment['id'];
			if($_COOKIE['user_id']==$comment['users_id']){
				echo "<form action='DeleteComment.php' method='GET'>
					<input type='hidden' name='comid' value='$comid'>
					<input type='submit' value='DELETE'></input>
				</form>";
			}
			echo "<hr>";
		}
	}
	Disconnect($conn);
}


//////////////
//			//
// USERNAME //
//          //
//////////////

function fetchUsernameByID($ID){
	include('bdc.php');

	$query="SELECT * FROM users WHERE id='$ID'";
	$result;

	if(mysqli_query($conn, $query)){
    //Get what the database answered
    $result = $conn->query($query);
	}
	else{
		echo("<script>console.log('username not found')</script>");
	}
	foreach($result as $user){
		return $user["username"];
	}
}

function fetchIDByUsername($uname){
	include('bdc.php');

	$query="SELECT * FROM users WHERE username = '$uname'";
	$result;

	if(mysqli_query($conn, $query)){
    //Get what the database answered
    $result = $conn->query($query);
	};
	foreach($result as $row){
		return $row['id'];
	}
}


//////////
//      //
// BIO  //
//      //
//////////
function fetchBio($ID){
	//include("Disconnect.php");
	include('bdc.php');

	$query="SELECT * FROM user_bios WHERE users_id='$ID'";
	$result;
	$content="NULL";

	if(mysqli_query($conn, $query)){
    	//Get what the database answered
    	$result = $conn->query($query);
    	foreach($result as $bio){
    		$content = $bio["content"];
			//$content = $bio;
    		//echo "<h4>$content</h4><br>";
		}
	}
	//$content = $result[0 => "content"];
	echo "<h4>$content</h4><br>";
	return $content;
}

///////////////
//           //
//  ACCOUNT  //
//           //
///////////////

function fetchAccountInfo($ID){
	//include("Disconnect.php");
	include('bdc.php');

	$query="SELECT * FROM users WHERE id='$ID'";
	$result;

	if(mysqli_query($conn, $query)){
    	//Get what the database answered
    	$result = $conn->query($query);
	}
	$name = fetchUsernameByID($ID);
	echo "<h2>Username:</h2><h1>$name</h1><br><hr>
		  <h2>BIO:</h2><br>";
	fetchBio($ID);
	
    //Disconnect($conn);
}
?>