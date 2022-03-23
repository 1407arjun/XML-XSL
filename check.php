<?php
  include "database.php";
  if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
        echo 0;
    else
        echo 2;
  }
  
  if (isset($_GET['pwd'])) {
    $password = $_GET['pwd'];
    if (strlen($password) < 6) {
        echo 1;
    } else {
        echo 2;
    }
  }
?>