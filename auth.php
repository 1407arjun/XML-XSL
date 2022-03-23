<?php
  include "database.php";
  $email = $_POST['email'];
  $password = $_POST['pwd'];

  $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
  $result = $conn->query($sql);

  if ($result->num_rows <= 0) {
    echo 0;
  } else {
    while($row = $result->fetch_assoc()) {
      if ($row['password'] == $password) {
        setcookie('user', $name, time() + (86400 * 30), "/");
        header("Location: /IWP2022/index.php");
        exit();
      } else {
        echo 1;
      }
    }
  }
?>