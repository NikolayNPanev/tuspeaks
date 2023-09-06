<?php
$ID = $_POST["userid"];
$PubID = $_POST['pubid'];
$content = $_POST['content'];

function createComment($content,$PubID,$ID){
	include('../DBphp/bdc.php');
	$query="INSERT INTO comments(content,publications_id,users_id) VALUES('$content', '$PubID', '$ID')";
	if(mysqli_query($conn, $query)){
    $result = $conn->query($query);
	}
	//Disconnect($conn);
}

createComment($content,$PubID,$ID);
echo $PubID." ".$ID." ".$content;
header("Location: Comments.php?id=$PubID");
?>