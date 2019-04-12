<!DOCTYPE html>
<html>
<head>
	<title>Sopranos</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body background="background.jpg" style="background-size: 140em 65em">
	<div class="container">
		<center>
		<img src="images/logo1.png" width="300px">
		</center>
		<center>
			<a href="index.php" class="btn btn-primary col-lg-2">Home</a>
			<a href="viewcart.php" class="btn btn-primary col-lg-2">Cart</a>
			<a href="pizza.php" class="btn btn-primary col-lg-2">Menu</a>
		</center>
		<br>
		<br>
		<table style="background-color: white "class="table rounded">
			<thead>
				<tr>
					<th>Foto</th>
					<th>Pizza</th>
					<th>Beschrijving</th>
					<th>Aantal</th>
					<th>Soort</th>
					<th>Prijs</th>
					<th>Toevoegen</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include 'data.php';
					for($i = 0; $i<count($name); ++$i):
				?>
				<tr>
					<form action="addcart.php" method="post">
						<input type="hidden" name="id" value="<?php print $i; ?>">
						<td><img src="/shop/images/<?php print $image[$i]; ?>" width="150px"></td>
						<td><?php print $name[$i]; ?></td>
						<td><?php print $desc[$i]; ?></td>
						<td><input type="text" name="aantal" placeholder="Aantal"class="form-control col-sm-7"></td>
						<td>					      
						  	<div class="form-group">
						      	<select name="size" value="Medium" class="form-control" id="sel1">
							        <option>Medium</option>
							        <option>Large</option>
							        <option>Calzone</option>
							      </select>
						</td>
						<td><?php print $price[$i]; ?></td>
						<td>
							<input type="submit" class="btn btn-primary" value="Add Cart">
						</td>
					</form> 
				</tr>
			<?php endfor; ?>
				
			</tbody>
		</table>
		<input type="hidden" name="" value="">
	</div>
	<br>
</body>
</html>