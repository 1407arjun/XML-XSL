<?php
  if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $flag = 0;
    $xml = simplexml_load_file("assets/xml/users.xml");

    foreach($xml->children() as $user) {
      if ($user->email == $email) {
        $flag = 1;
        break;
      }
    }

    if ($flag == 1)
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