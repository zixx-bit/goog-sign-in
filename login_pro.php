
<?php

 require_once $_SERVER['DOCUMENT_ROOT']. '/bumihouse/core/init.php';
 require_once $_SERVER['DOCUMENT_ROOT'].'/bumihouse/helpers/helpers.php';
  session_start();
  $_SESSION["id"] = $_POST["id"];
  $_SESSION["name"] = $_POST["name"];
  $_SESSION["email"] =$_POST["email"];

  $sql = "SELECT*FROM users WHERE email='".$_POST["email"]."'";
  $result = $mysqli->query($sql);

  if (!empty($result->fetch_assoc())) {
    $sql2 ="UPDATE users SET google_id='".$_POST["id"]."' WHERE email='".$_POST["email"]"'";

    // code...
  }else {
    $sql2 = "INSERT INTO users(name, email, google_id) VALUES('".$_POST['name']."', '".$_POST['email']."', '".$_POST['id']."')";
  }


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h5>welcome</h5>

  </body>
</html>
