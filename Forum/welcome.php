<?php
print_r($_COOKIE);
	foreach ($_COOKIE as $name => $password) {
    $welcomeName = $name;
	}
	echo "<script>alert('SUCCESS: Welcome to TU-SPEAKS, $welcomeName'); location='forum.php';</script>"
?>