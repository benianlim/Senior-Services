<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SeniorServices | Submit a request</title>

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
    <?php
      session_start();
      include('header.php');
    ?>
  <div class = "bg-img">
    <div class="container panel panel-default">
      <div class="row panel-body">
        <div class="col-md-6 col-md-offset-3">
          <h3 align="center">Submit a Request</h3>
          <form role="form" method="post" action="submitRequest.php">
            <div class="form-group col-md-6">
              <label for="serviceCode">Service Code:</label>
              <select class="form-control" name="serviceCode">
                <option value="HEA">HEA</option>
                <option value="SHO">SHO</option>
                <option value="FNB">FNB</option>
                <option value="CLE">CLE</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="requestDate">Service Date:</label>
              <input type="date" class="form-control" name="requestDate">
            </div>
            <div class="form-group col-md-12">
              <label for="notes">Additional Notes:</label>
              <textarea rows="4" class="form-control" name="notes" placeholder="Type in your notes for the helper here. (optional)"></textarea>
            </div>
            <div class="form-group" align="center">
              <button type="submit" name="submitbutton" class="btn btn-primary">Submit Request</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
      <div class="row panel-body">
        <div class="col-md-8 col-md-offset-2">
          <h4 align="center">List of Services</h4>
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="col-xs-3">Service Code</th>
                <th scope="col" class="col-xs-9">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="col">HEA</td>
                <td scope="col">For anything from collecting medicine from dispensaries to house calls.</td>
              </tr>
              <tr>
                <td scope="col">SHO</td>
                <td scope="col">Clothing? Groceries? A new radio? You name it! (Note: Purchasing meals is NOT under this category.)</td>
              </tr>
              <tr>
                <td scope="col">FNB</td>
                <td scope="col">For all your sudden cravings for tong sui, roti canai, keropok lekor, and the like.</td>
              </tr>
              <tr>
                <td scope="col">CLE</td>
                <td scope="col">Watch your house turn spick and span in a jiffy! (We do vehicles, too!)</td>
              </tr>
            </tbody>
          </table>
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
