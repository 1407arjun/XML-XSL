<?php
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['pwd'];

  $flag = 0;
  $xml = new SimpleXMLElement(file_get_contents("assets/xml/users.xml"));

  foreach($xml->children() as $user) {
    if ($user->email == $email) {
      $flag = 1;
      break;
    }
  }

  if ($flag == 1) {
    echo 0;
  } else {
    if (strlen($password) < 6) {
      echo 2;
    }
    
    $newuser = $xml->addChild("user", "");
    $newuser->addChild("email", $email);
    $newuser->addChild("name", $name);
    $newuser->addChild("phone", $phone);
    $newuser->addChild("password", $password);

    if ($xml->asXML("assets/xml/users.xml")) {
      setcookie('user', $name, time() + (86400 * 30), "/");
      header("Location: /DA5/assets/xml/cars.xml");
      exit();
    } else {
      echo 1;
    }
  }
?>