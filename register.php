<!DOCTYPE html>

<?php
    if(isset($_COOKIE['user'])) {
        header("Location: /DA5/index.php");
        exit();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="styles/login.css" rel="stylesheet">
    <meta name="theme-color" content="#7952b3">
    <title>Register</title>
</head>

<body class="text-center">
    <main class="form-signin">
        <form action="/DA5/newuser.php" method="POST" id="reg">
          <img class="mb-4" src="assets/logo.png" alt="" height="57">
          <h1 class="h3 mb-3 fw-normal">Register</h1>
      
          <div class="form-floating">
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" onkeyup="onEmail(this.value)">
            <label for="email">Email address</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="name" name="name" placeholder="FirstName LastName">
            <label for="name">Name</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="+91XXXXXXXXXX">
            <label for="phone">Phone Number</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
            <label for="pwd">Password</label>
          </div>
      
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
          <a href="/DA5/login.php" class="mt-5 mb-3 text-primary">Login</a>
          <p class="mt-5 mb-3 text-muted">&copy; 2022 CarHub</p>
        </form>
      </main>
    <script>
      function onEmail(value) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState === 4 && this.status == 200) {
            if (this.response == 0)
              alert("User already exists.")
          }
        };
        xmlhttp.open("GET", "/DA5/check.php?email=" + value, true);
        xmlhttp.send();
      }
    </script>
</body>
</html>