<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "requests_database";
$con = new mysqli($servername, $username, $password, $dbname);

$serviceCode = $_POST['serviceCode'];
$requestDate = $_POST['requestDate'];
$date = date ('Y-m-d', strtotime($requestDate));
//$requestTime = $_POST['requestTime'];
$notes = $_POST['notes'];
$status = "Pending";

$sql = "INSERT INTO request_table (requestID, serviceCode, requestDate, notes, status)
        VALUES (NULL, '$serviceCode', '$date', '$notes', '$status')";

mysqli_query($con, $sql);
mysqli_close($con);

/*
if(isset($_POST['submitButton'])) {
  $input = $_POST["requestDate"];
  $input = $_POST["notes"];

  header("Location: request.php");
  exit();
}*/
?>
