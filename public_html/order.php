<!--Created by Sam Law-->

<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<title>Game Space: Orders</title>
	<link rel='icon' href='img/icon.png'/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

   	 <!-- Main CSS styles for Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   	 <!-- Optional theme add-on -->
	<link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css">

	<link rel="stylesheet" href="css/custom.css">
</head>

<body>
 <!-- Navigation Bar -->
 <?php include "../resources/navigation.php"; ?>

      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Order Now</h1>
        </div>
      </div>

	<section>
		<div class="container">
		<h1>Order Form</h1>
		<h4>Name of game: 
			<select>
				<option>Overview</option>
				<option>Legend of Link</option>
				<option>Pac-Guy</option>
				<option>Josh Dietrich's Tax Simulator</option>
			</select>
		</h4>
		<h4>Number of copies: 
			<select id="selectCopies" onchange="checkCustom()">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option value='custom'>Custom</option>
			</select>
		</h4>
		<h4>Email (We will email you with confirmation of order): <input type="text"/></h4>
		<button type="button" class="btn btn-primary btn-sm">Submit Order</button>
	</div>
	</section>

	<?php include "../resources/footer.php"; ?>
	<script>
		function checkCustom() {
			var select = document.getElementById("selectCopies");
			var selectedValue = select.options[select.selectedIndex].value;

			if(selectedValue == "custom") {
				var numCopies = prompt("How many copies would you like to order?");
				select.options[select.selectedIndex].text = "Custom: " + numCopies;
			}
		}
	</script>


    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>