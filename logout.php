<?php
    setcookie('user', '', time() - (86400 * 30), "/");
    header("Location: /DA5/login.php");
    exit();
?>