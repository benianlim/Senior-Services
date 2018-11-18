<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SeniorServices | Pending Requests</title>

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
          <h3 align="center">Pending Requests</h3>
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="col-xs-6">Request ID</th>
                <th scope="col" class="col-xs-6">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="col">HE0001</td>
                <td scope="col">Pending</td>
                <td scope="col"><a href="#">View</a></td>
              </tr>
              <tr>
                <td scope="col">SH0001</td>
                <td scope="col">Pending</td>
                <td scope="col"><a href="#">View</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <hr>
      <div class="row panel-body">
        <div class="col-md-6 col-md-offset-3">
          <h3 align="center">Session Info</h3>
          <form role="form" method="post">
            <div class="form-group col-md-6">
              <label for="requestID">Request ID:</label>
              <input type="text" class="form-control" name="requestID" value="" disabled>
            </div>
            <div class="form-group col-md-6">
              <label for="serviceCode">Service Code:</label>
              <input type="text" class="form-control" name="serviceCode" value="" disabled>
            </div>
            <div class="form-group col-md-12">
              <label for="requestDate">Service Date:</label>
              <input type="date" class="form-control" name="requestDate" value="" disabled>
            </div>
            <div class="form-group col-md-12">
              <label for="comments">Additional Notes:</label>
              <textarea rows="4" class="form-control" value="" disabled></textarea>
            </div>
            <div class="form-group" align="center">
              <button type="submit" class="btn btn-success">Accept</button>
              <button type="submit" class="btn btn-danger">Decline</button>
            </div>
          </form>
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
            <li><a href="request.php">Submit A Request</a></li>
            <li><a href="pendingrequest.php">View Pending Requests</a></li>
            <li><a href="manage.php">View Request History</a></li>
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
