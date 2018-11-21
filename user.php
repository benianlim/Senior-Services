<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "seniorservices";
 $con = new mysqli($servername, $username, $password, $dbname);

 session_start();

 $fullName=$_POST['fullName'];
 $Username=$_POST['Username'];
 $Password=$_POST['Password'];
 $mobileNumber=$_POST['mobileNumber'];
 $Address=$_POST['Address'];
 $userType=$_POST['userTypeRadio'];

 # Make changes for registering Service Providers.
 if ($userType = 'seniorCitizen') {
   $sql = "INSERT INTO  user_table (fullName, username, password, mobileNumber, address, userType)
           VALUES ('$fullName','$Username','$Password','$mobileNumber','$Address', '$userType')";
 } else if ($userType = 'serviceProvider') {
   $services = array();
   if(isset($_POST['healthcareCheckbox'])) {
     $services[] = $_POST['healthcareCheckbox'];
   }
   if(isset($_POST['shoppingCheckbox'])) {
     $services[] = $_POST['shoppingCheckbox'];
   }
   if(isset($_POST['foodCheckbox'])) {
     $services[] = $_POST['foodCheckbox'];
   }
   if(isset($_POST['cleaningCheckbox'])) {
     $services[] = $_POST['cleaningCheckbox'];
   }
   $services = implode(",", $services);

   $sql = "INSERT INTO  user_table (fullName, username, password, mobileNumber, address, userType, services)
           VALUES ('$fullName','$Username','$Password','$mobileNumber','$Address', '$userType', '$services')";
 }


 if (mysqli_query($con, $sql)) {
   echo '<script type="text/javascript">
           alert("Registration complete!");
           window.location.href="login.php";
         </script>';
 } else {
   echo '<script type="text/javascript">
           alert("ERROR: Could not execute '.$sql. '. ' .mysqli_error($con).'");
           window.location.href="signup.php";
         </script>';
 }

 mysqli_close($con);
?>
