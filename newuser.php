<?php
  include "database.php";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['pwd'];

  $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo 0;
  } else {
    if (strlen($password) < 6) {
      echo 2;
    }
    $sql = "INSERT INTO `users` VALUES('$name', '$email', '$password')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
      setcookie('user', $name, time() + (86400 * 30), "/");
      header("Location: /IWP2022/index.php");
      exit();
    }else{
      echo 1;
    }
  }
?>