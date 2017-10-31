<!DOCTYPE html>
<html lang='en'>
  <head>
  	<meta charset="utf-8">
  	<title>Game Space: Sign Up</title>
  	<link rel='icon' href='img/icon.png'/>
  	<meta name="viewport" content="width=device-width, initial-scale=1">

     	 <!-- Main CSS styles for Bootstrap -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     	 <!-- Optional theme add-on -->
  	<link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css">

      <!-- Our custom stylesheet that WE write. We need this to not have our text appear under the nav bar. -->
  	<link rel="stylesheet" href="css/custom.css">
  </head>
  <body>
     <!-- Navigation Bar -->
     <?php include "../resources/navigation.php"; ?>
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Sign up for Game Space!</h1>
      </div>
    </div>
    <form>
      <div class="container">
        <div class="col-xs-12 col-md-6">
          <div class="form-group">
            <label for="exampleFullName">Full Name (First and Last)</label>
            <input type="text" class="form-control" id="exampleFullName" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleUsername1">Username</label>
            <input type="text" class="form-control" id="exampleUsername1" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
                Check me out
            </label>
          </div>
          <button type="submit" class="btn btn-primary" formaction="congrats.php">Submit</button>
        </div>            
      </div>
    </form>
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