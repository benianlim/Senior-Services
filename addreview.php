<?php
  function mysqli_result($res, $row, $field=0) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
  }

  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "seniorservices";
  $con = new mysqli($servername, $username, $password, $dbname);

  $currentUser = $_SESSION["username"];
  $requestID = $_POST['requestID'];
  $submitter = $_POST['submitter'];
  $serviceProvider = $_POST['serviceProvider'];
  $rating = $_POST['rating'];
  $comments = $_POST['comments'];
  $reviewer = "";
  $reviewee = "";

  if ($submitter == $currentUser) {
    $reviewer = $submitter;
    $reviewee = $serviceProvider;
  } else if ($serviceProvider == $currentUser) {
    $reviewer = $serviceProvider;
    $reviewee = $submitter;
  }
  
  $sql = "INSERT INTO review_table (requestID, reviewer, reviewee, rating, comments)
          VALUES ('$requestID','$reviewer','$reviewee','$rating','$comments')";

  if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript">
            alert("Review successfully submitted!");
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
