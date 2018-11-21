<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SeniorServices | Request History</title>

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

    <div class="bg-img">
    <div class="container panel panel-default">
      <div class="row panel-body">
        <div class="col-md-6 col-md-offset-3">
          <h3 align="center">Request History</h3>
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="col-xs-4">ID</th>
                <th scope="col" class="col-xs-4">Code</th>
                <th scope="col" class="col-xs-4">Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
                function mysqli_result($res, $row, $field=0) {
                  $res->data_seek($row);
                  $datarow = $res->fetch_array();
                  return $datarow[$field];
                }

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "seniorservices";
                $con = new mysqli($servername, $username, $password, $dbname);

                $currentUser = $_SESSION['username'];
                $sql = "SELECT * FROM request_table WHERE submitter = '$currentUser' OR serviceProvider = '$currentUser'";
                $requests = mysqli_query($con, $sql);
                mysqli_close($con);

                $num = mysqli_num_rows($requests);
                for ($x = 0; $x < $num; $x++) {
                  $reqID = mysqli_result($requests, $x, "requestID");
                  $code = mysqli_result($requests, $x, "serviceCode");
                  $status = mysqli_result($requests, $x, "status");

                  echo '<tr>
                  <td scope="col">'.$reqID.'</td>
                  <td scope="col">'.$code.'</td>
                  <td scope="col">'.$status.'</td>
                  <td scope="col"><a href="edit.php?id='.$reqID.'" class="btn btn-primary">Edit</a></td>
                  <td scope="col"><a href="review.php?id='.$reqID.'" class="btn btn-primary">Review</a></td></tr>';
                }
              ?>
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
