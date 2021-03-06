<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SeniorServices | Home</title>

    <!-- Bootstrap -->
    <link href="../bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <style media="screen">
      .home-logo {
        height: 64px;
        width: 64px;
      }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<?php
session_start();
include('header.php');
?>

    <div class="bg-img">
    <div class="container">
      <div class="jumbotron">
        <div class="row panel panel-default">
          <div class="col-md-4 panel-body" align="center">
            <h3>How It Works</h3>
            <img src="img/submit.png" alt="Submission logo" class="home-logo">
            <p>1. Submit a Request</p>
            <img src="img/match.png" alt="Match logo" class="home-logo">
            <p>2. Get Matched</p>
            <img src="img/relax.png" alt="Relax logo" class="home-logo">
            <p>3. Hire and Relax</p>
          </div>

          <div class="col-md-8 panel-body" align="center">
            <h3>Services Offered</h3>
            <div class="row">
              <div class="col-md-6 panel-body">
                  <img src="img/healthcare.png" alt="Healthcare logo" class="home-logo">
                  <p>Healthcare</p>
              </div>
              <div class="col-md-6 panel-body">
                  <img src="img/shopping.png" alt="Shopping logo" class="home-logo">
                  <p>Shopping</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 panel-body">
                  <img src="img/meal.png" alt="Meal logo" class="home-logo">
                  <p>Food and Beverages</p>
              </div>
              <div class="col-md-6 panel-body">
                  <img src="img/cleaning.png" alt="Cleaning logo" class="home-logo">
                  <p>Cleaning</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
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
