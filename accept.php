<?php
  session_start();
  error_reporting(0);
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "user_database";
  $con = new mysqli($servername, $username, $password, $dbname);

  $requestID= $_POST['requestID'];
  $serviceCode= $_POST['serviceCode'];
  $serviceDate = $_POST['serviceDate'];
  $notes = $_POST['notes'];

          if($login!=''&&$pw!='')
          {
           $query="SELECT * FROM user_table WHERE Username ='".$login."' and Password ='".$pw."'";

           $result=mysqli_query($con,$query);

           if(!$result)
              die("Query Failed: " .  mysqli_error($conn));
           else{
               if(mysqli_num_rows($result)>0)
               {
                  $_SESSION['username']= $login;
                  header("Location: home.php");
               }
      else
       {
         echo '<script language="javascript">';
         echo 'alert("You entered username or password is incorrect")';
         echo '</script>';
       }
   }
  }

  if(isset($_POST['loginBtn'])) {
      $input = $_POST["Username"];
      $input = $_POST["Password"];

      header("Location: home.php");

  }

?>

<?php
  //request id, serviceCode, serviceDate, notes
  $username = $_GET['username'];

?>
