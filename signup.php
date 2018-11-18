<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SeniorServices | Sign Up</title>

    <!-- Bootstrap -->
    <link href="../bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--script>
      $(document).ready(function() {
        $("#seniorRadio").click(function() {
          $("#serviceProviderRadio").prop("checked", false);
          $("#serviceList").prop("disabled", true);
        });
        $("#serviceProviderRadio").click(function() {
          $("#seniorRadio").prop("checked", false);
          $("#serviceList").prop("enabled", true);
        });
      });
    </script-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js" charset="utf-8"></script>
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
                <li><a href="pendingrequest.php">View pending requests</a></li>
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
<form id="myform" name="RegForm" method="post" action="user.php" autocomplete="off">
<div class ="bg-img">
    <div class="container panel panel-default">
      <div class="row panel-body">
        <div class="col-md-6 col-md-offset-3">
          <h3 align="center">SeniorServices Sign Up</h3>
          <form role="form" method="post">
            <div class="form-group">
              <label for="fullName">Full Name</label>
              <input type="text" class="form-control" placeholder="Full Name" name = "fullName" required>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" placeholder="Username" name="Username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" placeholder="Password" name = "Password" required>
            </div>
            <div class="form-group">
              <label for="username">Phone Number</label>
              <div class="input-group">
                <span class="input-group-addon">+60</span>
                <input type="text" class="form-control" placeholder="123456789" name = "mobileNumber" onkeyup="this.value=this.value.replace(/[^\d]+/,'')" required>
              </div>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <textarea rows="3" class="form-control" name = "Address" placeholder="P. Sherman 42, Wallaby Way, Syndey" required></textarea>
            </div>
            <div class="form-group">
              <label for="userType">Are you a senior citizen or a service provider?</label>
              <div class="form-group">
                <label class="radio-inline">
                  <input type="radio" name="userTypeRadio" id="seniorRadio" value="seniorCitizen" checked>Senior citizen
                </label>
                <label class="radio-inline">
                  <input type="radio" name="userTypeRadio" id="serviceProviderRadio" value="serviceProvider">Service provider
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="serviceList">What kind of services do you provide? (Check all that apply)</label>
              <table class="table" id="serviceTable">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">ID</th>
                    <th scope="col">Service Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">
                      <input type="checkbox" name="healthcareCheckbox" value="healthcare" disabled>
                    </td>
                    <td scope="row">HEA</td>
                    <td scope="row">Healthcare</td>
                  </tr>
                  <tr>
                    <td scope="row">
                      <input type="checkbox" name="shoppingCheckbox" value="shopping" disabled>
                    </td>
                    <td scope="row">SHO</td>
                    <td scope="row">Shopping</td>
                  </tr>
                  <tr>
                    <td scope="row">
                      <input type="checkbox" name="s3Checkbox" value="service3" disabled>
                    </td>
                    <td scope="row">FNB</td>
                    <td scope="row">Food and Beverages</td>
                  </tr>
                  <tr>
                    <td scope="row">
                      <input type="checkbox" name="s4Checkbox" value="service4" disabled>
                    </td>
                    <td scope="row">CLE</td>
                    <td scope="row">Cleaning</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="form-group" align="center">
              <button type="submit" name ="submitbutton" class="btn btn-primary">Sign Up</button>
            </div>
        </form>
</form>

        </div>
      </div>

      <div class="row panel-body" align="center">
        <div class="col-md-6 col-md-offset-3">
          <p>Already have an account? Click <a href="login.php">here</a> to login!</p>
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



    <script src="js/signup.js"></script>
    <script src="js/validateemail.js"></script>

  </body>
</html>
