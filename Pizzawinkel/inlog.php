<?php?>
<!DOCTYPE html>
<html>
<head>
	<title>Saprano's</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="pbackground.jpg">
<ul class="nav nav-pills">
    <li class="nav-item">
    <a class="nav-link" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="pizza.php">Pizza's</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="winkelmand.php">Winkelmand</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="inlog.php">Inloggen</a>
  </li>
</ul>

<form action=".php">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="usern" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
<div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form>

<div id="bg">
  
</div>
  <footer>	
	</footer>

</body>
</html>