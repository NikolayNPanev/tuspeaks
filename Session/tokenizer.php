<?php 
//////////////////////////////////
//                              //
//  REQUIRES EXISTING VARIABLE  //
//           $Username          //
//           $Password          //
//                              //
//////////////////////////////////

setcookie("$Username", $Password, time()+86400,"/","localhost");
//setcookie("$Username", $password, time()+15); //15 second test

?>
