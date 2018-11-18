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
	    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
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
	                <li><a href="pendingrequest.php">View pending requests</a></li>
	                <li><a href="manage.php">View request history</a></li>
	              </ul>
	            </li>
	            <li class = "dropdown">
								<?php

								if (isset($_SESSION['username'])){
									echo '
							                <a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
							        $username = $_SESSION["username"];
							        echo explode(" ",trim($username))[0];

									echo '	</a>
						                <ul class="dropdown-menu dropdown-menu-right">
						                    <li><a class="" href="#">My Account</a></li>
						                    <li><a class="" href="manage-requests.php">Manage Requests</a></li>
						                    <li><a class="" href="logout.php">Logout</a></li>
						                </ul>';
								}
								else {
									echo '<a href="login.php">Login/Signup</a>';
								}
								?>
	            </li>
	          </ul>
	        </div>
	      </div>
	    </nav>
