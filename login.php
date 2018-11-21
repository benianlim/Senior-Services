<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SeniorServices | Login</title>

    <!-- Bootstrap -->
    <link href="../bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expended="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">SeniorServices</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Requests<span class="caret" /></a>
              <ul class="dropdown-menu">
                <li><a href="request.php">Submit a request</a></li>
                <li><a href="selectRequest.php">View pending requests</a></li>
                <li><a href="manage.php">View request history</a></li>
              </ul>
            </li>
            <li>
              <a href="login.php">Login/Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="bg-img">
    <div class="container panel panel-default">
      <div class="row panel-body">
        <div class="col-md-6 col-md-offset-3">
          <h3 align="center">SeniorServices Login</h3>
          <form role="form" method="post" action = "userLogin.php">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group" align="center">
              <button type="submit" class="btn btn-primary" id="loginBtn">Login</button>
            </div>
          </form>
        </div>
      </div>
      <div class="row panel-body" align="center">
        <div class="col-md-6 col-md-offset-3">
          <p>Don't have an account? Click <a href="signup.php">here</a> to register!</p>
        </div>
      </div>
    </div>
  </div>

    <footer class="footer-login">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3 class = "footer-text-header">About Us</h3>
            <p class ="footer-text-header">To provide an efficient convenience platform for senior citizens to request for services that they may require.</p>

          </div>
          <div class="col-md-5 mb-5">
            <h3 class = "footer-text-header">Contact Info</h3>
            <ul>
              <li>
                <span class ="footer-text">Address:</span><br>
                <span class ="footer-text-header">24, Block A, Bangsar South Tower A, 571200, Kuala Lumpur</span>
              </li>
              <li>
                <span class="footer-text">Telephone:</span><br>
                <span class="footer-text-header">+012-3456789</span>
              </li>
              <li>
                <span class="footer-text">Email:</span><br>
                <span class="footer-text-header">seniorservicesupport@gmail.com</span>
              </li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3 class="footer-text-header">Quick Links</h3>
            <ul>
              <?php
                if (isset($_SESSION['userType'])) {
                  $type = $_SESSION['userType'];
                  if ($type == "seniorCitizen") {
                    echo '
                    <li><a href="request.php">Submit a request</a></li>';
                  } else if ($type == "serviceProvider") {
                    echo '
                    <li><a href="selectRequest.php">View pending requests</a></li>';
                  }
                  echo '
                  <li><a href="manage.php">View request history</a></li>
                  <li><a href="allReviews.php">View user reviews</a></li>';
                } else {
                  echo '
                  <li><a href="request.php">Submit a request</a></li>
                  <li><a href="selectRequest.php">View pending requests</a></li>
                  <li><a href="manage.php">View request history</a></li>
                  <li><a href="allReviews.php">View user reviews</a></li>';
                }
              ?>
            </ul>
          </div>
          <div class="col-md-3">

          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p class = "footer-text text-center">&copy; Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | SeniorServices</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
  </body>
</html>
