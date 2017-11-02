<!--Created by Josh Dietrich-->

<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<title>Game Space: Locations</title>
	<link rel='icon' href='img/icon.png'/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

   	 <!-- Main CSS styles for Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   	 <!-- Optional theme add-on -->
	<link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css">

	<link rel="stylesheet" href="css/custom.css">
</head>

<body>
		<?php include "../resources/navigation.php"; ?>
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Store Locations</h1>
        </div>
      </div>

	<section>
		<div class="container">
		   <div class="col-xs-12 col-md-8">
			<h1>Where we are</h1>

			<table class="table table-hover">
				<thead>
					<tr>
						<th class="table_header_row">State</th>
						<th class="table_header_row">Cities</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Texas</th>
						<td>Houston, San Antonio, Austin, Dallas, Arlington</td>
					</tr>
					<tr>
						<th scope="row">Iowa</th>
						<td>Des Moines, Ames, Cedar Rapids, Iowa City, Davenport, Mason City</td>
					</tr>
					<tr>
						<th scope="row">North Carolina</th>
						<td>Raleigh, Charlotte, Asheville</td>
					</tr>
					<tr>
						<th scope="row">Minnesota</th>
						<td>St. Paul, Minneapolis, St. Cloud, Duluth</td>
					</tr>
					<tr>
						<th scope="row">Illinois</th>
						<td>Springfield, Chicago, Naperville, Rock Island</td>
					</tr>
					<tr>
						<th scope="row">Alaska</th>
						<td>Anchorage, Juneau</td>
					</tr>
				</tbody>
			</table>

			<p>Want to open up a store? Contact us <a href='mailto:alskdjflajsd@gmail.com?Subject=Hello'>here</a>.
		</div>
		</div>
	</section>

	<?php include "../resources/footer.php"; ?>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>