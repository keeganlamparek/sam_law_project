<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<title>Game Space!</title>
	<link rel='icon' href='img/icon.png'/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

   	 <!-- Main CSS styles for Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   	 <!-- Optional theme add-on -->
	<link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css">

    	<!-- If you don't like how bootstrap looks, go here and see other themes
        	 that are available:
        	 https://bootswatch.com/

        	 You can replace the 'optional theme' with links from the page below
        	 to get that theme:
        	 https://www.bootstrapcdn.com/bootswatch/
		-->

    	<!-- Our custom stylesheet that WE write. We need this to not have our
        	 text appear under the nav bar. -->
	<link rel="stylesheet" href="css/custom.css">
</head>

<body>
 <!-- Navigation Bar -->
 <?php include "../resources/navigation.php"; ?>
    
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Welcome aboard!</h1>
        </div>
      </div>

 <div class="alert alert-success" role="alert">
 <div class="container">
  <h4 class="alert-heading">Challenge accepted.</h4>
  <p>Heck ya! You have <strong>successfully</strong> signed up for Game Space! We look forward to seeing what radical things you accomplish through our games!</p>
  <hr>
</div>
</div>

	<footer>
    <div style='text-align: center; padding-top: 50px'>
      &copy; Josh Dietrich and Sam Law 2017
    </div>
	</footer>


    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>