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

  $login = $_POST['username'];
  $pw = $_POST['password'];

  $sql = "SELECT * FROM user_table WHERE username = '$login' and password = '$pw'";
  $user = mysqli_query($con, $sql);
  $userType = mysqli_result($user, 0, "userType");
  echo $userType;
  $_SESSION['username'] = $login;


    /* if(!$result)
      die("Query Failed: " .  mysqli_error($conn));
    else {
      if(mysqli_num_rows($result)>0) {
        $_SESSION['username']= $login;
        $_SESSION['userType']= $type;
        header("Location: home.php");
      } else {
        echo '<script language="javascript">';
        echo 'alert("You entered username or password is incorrect")';
        echo '</script>';
      }
    }
  }

  if(isset($_POST['loginBtn'])) {
      $input = $_POST["Username"];
      $input = $_POST["Password"];

      header("Location: home.php");*/

?>
