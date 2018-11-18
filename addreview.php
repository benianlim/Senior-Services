<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_database";
$con = new mysqli($servername, $username, $password, $dbname);


$rating=$_POST['rating'];
$comment=$_POST['comment'];


$sql = "INSERT INTO  review (rating,comment)
        VALUES ('$rating','$comment')";

mysqli_query($con, $sql);
mysqli_close($con);

if($sql == true){
  header("Location: manage.html");
}

?>
