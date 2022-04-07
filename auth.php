<?php
  $email = $_POST['email'];
  $password = $_POST['pwd'];

  $xml = simplexml_load_file("assets/xml/users.xml");

  foreach($xml->children() as $user) {
    if ($user->email == $email && $user->password == $password) {
        setcookie('user', $user->name, time() + (86400 * 30), "/");
        header("Location: /DA5/assets/xml/cars.xml");
        exit();
    }
  }

  echo 1;
?>