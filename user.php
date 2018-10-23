<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "user_database";
 $con = new mysqli($servername, $username, $password, $dbname);

 session_start();

 $fullName=$_POST['fullName'];
 $Username=$_POST['Username'];
 $Password=$_POST['Password'];
 $mobileNumber=$_POST['mobileNumber'];
 $Address=$_POST['Address'];
 $userType=$_POST['userTypeRadio'];

 $sql = "INSERT INTO  user_table (fullName,Username,Password, mobileNumber, Address, userType)
         VALUES ('$fullName','$Username','$Password','$mobileNumber','$Address', '$userType')";

 mysqli_query($con, $sql);
 mysqli_close($con);

   if(isset($_POST['submitbutton'])) {
     if(isset($_POST['submitbutton'])) {
       $input = $_POST["fullName"];
       $input = $_POST["Username"];
       $input = $_POST["Password"];
       $input = $_POST["mobileNumber"];
       $input = $_POST["Address"];
       $input = $_POST["userTypeRadio"];
       header("Location: login.php");
       exit();
     }
   }


?>
