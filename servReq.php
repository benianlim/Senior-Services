<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bit216";
$con = new mysqli($servername, $username, $password, $dbname);

$requiredDate = $_POST['requestDate'];
$notes = $_POST['comments'];

$sql = "INSERT INTO servicerequest (requiredDate, notes)
        VALUES ('$requiredDate', '$notes')";

mysqli_query($con, $sql);
mysqli_close($con);
?>
