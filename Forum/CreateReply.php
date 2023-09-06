<?php
$ID = $_POST["userid"];
$ComID = $_POST['comid'];
$content = $_POST['content'];

function createComment($content,$ComID,$ID){
	include('../DBphp/bdc.php');
	$query="INSERT INTO replies(content,comments_id,users_id) VALUES('$content', '$ComID', '$ID')";
	if(mysqli_query($conn, $query)){
    //$result = $conn->query($query);
	}
	//Disconnect($conn);
}

createComment($content,$ComID,$ID);
echo $ComID." ".$ID." ".$content;
header("Location: Replies.php?id=$ComID");
?>