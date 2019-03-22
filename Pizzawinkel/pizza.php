<?php?>
<!DOCTYPE html>
<html>
<head>
	<title>Saprano's</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
  <div class="container">
    <div class="card my-5" style="width: 18rem;">
      <div class="card-body">
        <img class="card-img-top" src="marg.jpg" alt="Card image cap">
        <h5 class="card-title">Margerita</h5>
        <p class="card-text">Tomaat, Kaas.</p>
        <a href="#" class="btn btn-primary">Toevoegen</a>
      <select name="soorten">
        <option value="medium">Medium</option>
        <option value="large">Large</option>
        <option value="calzone">Calzone</option>
      </select>
      </div>
    </div>
  </div>

	<footer>	
	</footer>
</body>
</html>