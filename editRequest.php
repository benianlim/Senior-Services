<?php
  session_start();

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "seniorservices";
  $con = new mysqli($servername, $username, $password, $dbname);

  $requestID = $_POST['requestID'];
  $status = $_POST['status'];
  $notes = $_POST['notes'];

  $sql = "UPDATE request_table
          SET status = '$status', notes = '$notes'
          WHERE requestID = $requestID";

  if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript">
            alert("Request successfully edited!");
            window.location.href="manage.php";
          </script>';
  } else {
    echo '<script type="text/javascript">
            alert("ERROR: Could not execute '.$sql. '. ' .mysqli_error($con).'");
            window.location.href="manage.php";
          </script>';
  }

  mysqli_close($con);
?>
