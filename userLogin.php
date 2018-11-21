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

  if($login!=''&&$pw!='') {
    $sql = "SELECT * FROM user_table WHERE username = '$login' and password = '$pw'";
    $user = mysqli_query($con, $sql);
    $userType = mysqli_result($user, 0, "userType");

    if(!$user)
      die("Query Failed: " . mysqli_error($con));
    else {
      if(mysqli_num_rows($user)>0) {
        $_SESSION['username'] = $login;
        $_SESSION['userType'] = $userType;
        header("Location: home.php");
      } else {
        echo '<script language="javascript">';
        echo 'alert("You entered username or password is incorrect")';
        echo '</script>';
      }
    }
  }

  if(isset($_POST['loginBtn'])) {
    header("Location: home.php");
  }
?>
