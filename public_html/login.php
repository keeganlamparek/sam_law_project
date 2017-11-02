<!DOCTYPE html>
<html lang='en'>
  <head>
  	<meta charset="utf-8">
  	<title>Game Space: Log In</title>
  	<link rel='icon' href='img/icon.png'/>
  	<meta name="viewport" content="width=device-width, initial-scale=1">

     	 <!-- Main CSS styles for Bootstrap -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     	 <!-- Optional theme add-on -->
  	<link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css">

      	<!-- Our custom stylesheet that WE write. We need this to not have our
          	 text appear under the nav bar. -->
  	<link rel="stylesheet" href="css/custom.css">
  </head>
  <body>
   <!-- Navigation Bar -->
   <?php include "../resources/navigation.php"; ?>
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Log in to Game Space!</h1>
      </div>
    </div>
    <form>
      <div class="container">
        <div class="col-xs-12 col-md-6">
          <div class="form-group">
            <label for="InputUsername">Username</label> 
            <input type="text" class="form-control" id="InputUsername" placeholder="Username"/>
          </div>
          <div class="form-group">
            <label for="InputPassword">Password</label>
            <input type="password" class="form-control" id="InputPassword" placeholder="Password"/>
          </div>
          <button type="button" class="btn btn-primary btn-sm">Log In</button>
       
        </div>
      </div>
    </form>
    <?php include "../resources/footer.php"; ?>
    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>