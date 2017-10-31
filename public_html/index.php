<!--Created by Josh Dietrich-->

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <title>Game Space</title>
  <link rel='icon' href='img/icon.png' />
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
      <h1 class="display-3">Game Space: The Space for Gamers</h1>
      <p>Game Space is a company that was made by gamers for 
        gamers. It is a non-profit organization that strives to provide
        the highest quality games for the lowest prices.</p>
    </div>
  </div>
  <section>
    <div class="container" style="margin-bottom: 15px;">
      <div class="col-xs-12 col-md-12">
        <img src="img/icon.png" alt="Game Space Logo"/>
      </div>
    </div>
    <div class="container">
      <div class="col-xs-12 col-md-6">
        <h3>Reviews</h3>
        <p>Our reviews are based on the highest standards of gaming professionals worldwide. 
          All games go through a rigorous testing process 
          before we come together as a company to grade it. 
          Many people look to our standards to rate their own games 
          as well. We are the kings of the game review industry. 
          If you'd like to check some of them out, check
          them out <a href='review.html'>here</a>!</p>
      </div>
      <div class="col-xs-12 col-md-6">
        <h3>Stores</h3>
        <p>We have stores located around the country and even 
          some in Europe and Asia. We are constantly getting awards for
          our customer service and reliability. If you'd like to 
          find a store near you, check out our locator <a href='stores.html'>here</a>,
          or take a walk around the block, there's probably one 
          nearby. If you'd like to order online instead of in-store,
          feel free to check out our online order form <a href='order.html'>here</a>!</p>
      </div>
    </div>  
    <div class="container">
      <div class="col-xs-12 col-md-6">
        <h3>News</h3>
        <p>Our company is constantly innovating and bringing 
          the highest standards into the gaming community. Find out more
          about what we're doing and how we're doing it <a href='news.html'>here</a>!</p>
      </div>
    </div>
  </section>
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