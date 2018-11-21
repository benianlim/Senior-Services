<?php
  session_start();

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "seniorservices";
  $con = new mysqli($servername, $username, $password, $dbname);

  $id = $_GET['id'];
  $currentUser = $_SESSION["username"];
  $sql = "UPDATE request_table
          SET status = 'accepted', serviceProvider = '$currentUser'
          WHERE requestID = $id";

  if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript">
            alert("Request accepted!");
            window.location.href="selectRequest.php";
          </script>';
  } else {
    echo '<script type="text/javascript">
            alert("ERROR: Could not execute '.$sql. '. ' .mysqli_error($con).'");
            window.location.href="selectRequest.php";
          </script>';
  }
  mysqli_close($con);
?>
