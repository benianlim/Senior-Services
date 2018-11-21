<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "seniorservices";
 $con = new mysqli($servername, $username, $password, $dbname);

 session_start();
 $Username = $_SESSION['username'];
 $serviceCode = $_POST['serviceCode'];
 $serviceDate = $_POST['requestDate'];
 $notes = $_POST['notes'];

 $sql = "INSERT INTO request_table (submitter, serviceCode, serviceDate, notes)
         VALUES ('$Username','$serviceCode','$serviceDate','$notes')";

 if (mysqli_query($con, $sql)) {
   echo '<script type="text/javascript">
           alert("Request successfully submitted!");
           window.location.href="request.php";
         </script>';
 } else {
   echo '<script type="text/javascript">
           alert("ERROR: Could not execute '.$sql. '. ' .mysqli_error($con).'");
           window.location.href="request.php";
         </script>';
 }

 mysqli_close($con);
?>
