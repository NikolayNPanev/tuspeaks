<?php
if(!empty($_COOKIE)){
  header("Location: Forum/welcome.php");
}
include("DBphp/CreateDB.php");
//CreateDB();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="CSS/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TU-Speaks</title>
</head>


<body id="body">
<div class="navbar">
<ul>
  <h1>TU Speaks</h1>
  <div class="navmenu">
  <li><a>...</a></li>
  <li><a href="#body">Home</a></li>
  <li><a href="#body">News</a></li>
  <li><a href="#body">Contact</a></li>
  <li><a href="#body">About</a></li>
  </div>
</ul>
</div>

<div class="login">
  <form action="DBphp/Login.php" method="POST">
    <label>LOGIN</label><br>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <br>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br>
    <button type="submit">Login</button>
    <br>
  </form>
  <br>
  <form class="askReg" action="DBphp/Register.html">
    <label for="register"><b>Don't have an account?</b></label>
    <button type="submit">Register Here!</button>
  </form>
  </div>
<?php
?>

</body>
</html>
   


