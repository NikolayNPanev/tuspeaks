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


<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non mollis velit. Maecenas mauris mauris, suscipit sit amet arcu at, cursus convallis orci. In aliquet leo a consequat feugiat. Pellentesque placerat nibh at elit cursus rhoncus. Ut vulputate magna eget tellus ultrices ornare. Nullam massa velit, fermentum sit amet arcu eget, pharetra tempus dolor. Maecenas diam erat, auctor et sapien ut, ultrices vulputate lorem. In diam elit, vehicula ac pulvinar non, interdum sit amet lorem. Quisque arcu metus, dapibus at ultricies eu, volutpat at purus. Nam metus tellus, facilisis vitae tellus lobortis, facilisis euismod tortor. Quisque urna ante, blandit non sem ut, pulvinar euismod dolor.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non mollis velit. Maecenas mauris mauris, suscipit sit amet arcu at, cursus convallis orci. In aliquet leo a consequat feugiat. Pellentesque placerat nibh at elit cursus rhoncus. Ut vulputate magna eget tellus ultrices ornare. Nullam massa velit, fermentum sit amet arcu eget, pharetra tempus dolor. Maecenas diam erat, auctor et sapien ut, ultrices vulputate lorem. In diam elit, vehicula ac pulvinar non, interdum sit amet lorem. Quisque arcu metus, dapibus at ultricies eu, volutpat at purus. Nam metus tellus, facilisis vitae tellus lobortis, facilisis euismod tortor. Quisque urna ante, blandit non sem ut, pulvinar euismod dolor.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non mollis velit. Maecenas mauris mauris, suscipit sit amet arcu at, cursus convallis orci. In aliquet leo a consequat feugiat. Pellentesque placerat nibh at elit cursus rhoncus. Ut vulputate magna eget tellus ultrices ornare. Nullam massa velit, fermentum sit amet arcu eget, pharetra tempus dolor. Maecenas diam erat, auctor et sapien ut, ultrices vulputate lorem. In diam elit, vehicula ac pulvinar non, interdum sit amet lorem. Quisque arcu metus, dapibus at ultricies eu, volutpat at purus. Nam metus tellus, facilisis vitae tellus lobortis, facilisis euismod tortor. Quisque urna ante, blandit non sem ut, pulvinar euismod dolor.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non mollis velit. Maecenas mauris mauris, suscipit sit amet arcu at, cursus convallis orci. In aliquet leo a consequat feugiat. Pellentesque placerat nibh at elit cursus rhoncus. Ut vulputate magna eget tellus ultrices ornare. Nullam massa velit, fermentum sit amet arcu eget, pharetra tempus dolor. Maecenas diam erat, auctor et sapien ut, ultrices vulputate lorem. In diam elit, vehicula ac pulvinar non, interdum sit amet lorem. Quisque arcu metus, dapibus at ultricies eu, volutpat at purus. Nam metus tellus, facilisis vitae tellus lobortis, facilisis euismod tortor. Quisque urna ante, blandit non sem ut, pulvinar euismod dolor.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non mollis velit. Maecenas mauris mauris, suscipit sit amet arcu at, cursus convallis orci. In aliquet leo a consequat feugiat. Pellentesque placerat nibh at elit cursus rhoncus. Ut vulputate magna eget tellus ultrices ornare. Nullam massa velit, fermentum sit amet arcu eget, pharetra tempus dolor. Maecenas diam erat, auctor et sapien ut, ultrices vulputate lorem. In diam elit, vehicula ac pulvinar non, interdum sit amet lorem. Quisque arcu metus, dapibus at ultricies eu, volutpat at purus. Nam metus tellus, facilisis vitae tellus lobortis, facilisis euismod tortor. Quisque urna ante, blandit non sem ut, pulvinar euismod dolor.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non mollis velit. Maecenas mauris mauris, suscipit sit amet arcu at, cursus convallis orci. In aliquet leo a consequat feugiat. Pellentesque placerat nibh at elit cursus rhoncus. Ut vulputate magna eget tellus ultrices ornare. Nullam massa velit, fermentum sit amet arcu eget, pharetra tempus dolor. Maecenas diam erat, auctor et sapien ut, ultrices vulputate lorem. In diam elit, vehicula ac pulvinar non, interdum sit amet lorem. Quisque arcu metus, dapibus at ultricies eu, volutpat at purus. Nam metus tellus, facilisis vitae tellus lobortis, facilisis euismod tortor. Quisque urna ante, blandit non sem ut, pulvinar euismod dolor.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non mollis velit. Maecenas mauris mauris, suscipit sit amet arcu at, cursus convallis orci. In aliquet leo a consequat feugiat. Pellentesque placerat nibh at elit cursus rhoncus. Ut vulputate magna eget tellus ultrices ornare. Nullam massa velit, fermentum sit amet arcu eget, pharetra tempus dolor. Maecenas diam erat, auctor et sapien ut, ultrices vulputate lorem. In diam elit, vehicula ac pulvinar non, interdum sit amet lorem. Quisque arcu metus, dapibus at ultricies eu, volutpat at purus. Nam metus tellus, facilisis vitae tellus lobortis, facilisis euismod tortor. Quisque urna ante, blandit non sem ut, pulvinar euismod dolor.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non mollis velit. Maecenas mauris mauris, suscipit sit amet arcu at, cursus convallis orci. In aliquet leo a consequat feugiat. Pellentesque placerat nibh at elit cursus rhoncus. Ut vulputate magna eget tellus ultrices ornare. Nullam massa velit, fermentum sit amet arcu eget, pharetra tempus dolor. Maecenas diam erat, auctor et sapien ut, ultrices vulputate lorem. In diam elit, vehicula ac pulvinar non, interdum sit amet lorem. Quisque arcu metus, dapibus at ultricies eu, volutpat at purus. Nam metus tellus, facilisis vitae tellus lobortis, facilisis euismod tortor. Quisque urna ante, blandit non sem ut, pulvinar euismod dolor.</p>

</body>
</html>
   


