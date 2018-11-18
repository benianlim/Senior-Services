<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "requests_database";
$con = new mysqli($servername, $username, $password, $dbname);

$requestDate = $_POST['requestDate'];
// $requestTime = $_POST['requestTime'];
$notes = $_POST['notes'];

$requestID = null;
$status = "Pending";

$sql = "INSERT INTO request_table (requestID, requestDate, notes, status)
        VALUES ('$requestID', '$requestDate', '$notes', '$status')";

mysqli_query($con, $sql);
mysqli_close($con);

/*
if(isset($_POST['submitButton'])) {
  $input = $_POST["requestDate"];
  $input = $_POST["notes"];

  header("Location: request.php");
  exit();
}
?>
*/
