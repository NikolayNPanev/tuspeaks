<?php 
function tokenize($Uname, $user_id){
	//////////////////////////////////
	//                              //
	//  REQUIRES EXISTING VARIABLE  //
	//      $Uname, $user_id        //
	//                              //
	//////////////////////////////////
	$exp = time()+86400;

	setcookie("user_name",$Uname, $exp,"/");
	//include("../BDphp/Rooms.php");
	//include("../DBphp/Credentials.php");
	//$user_id=fetchIDByUsername($Uname);

	setcookie("user_id",$user_id, $exp,"/");
	//setcookie("$Username", $password, time()+15); //15 second test

}
	?>
