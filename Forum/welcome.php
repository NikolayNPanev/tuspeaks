<?php
print_r($_COOKIE);
    $welcomeName = $_COOKIE['user_name'];
    $id=$_COOKIE['user_id'];
	echo "<script>alert('SUCCESS: Welcome to TU-SPEAKS, $welcomeName, id=$id'); location='forum.php';</script>";
?>