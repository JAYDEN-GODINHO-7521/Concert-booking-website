<?php


if($_SERVER["REQUEST_METHOD"] === "POST"){

  $mysqli = require __DIR__ ."/database_con.php";

  $sql = sprintf("SELECT * FROM admin
          WHERE email = '%s'",
          $mysqli->real_escape_string($_POST["email"]));
  
  $result = $mysqli->query($sql);

  $user = $result->fetch_assoc();
  
  if($_POST["password"]===$user["password"]){
      session_start();
      $_SESSION["user"] = $user["name"];
      echo '<script type="text/JavaScript">
        alert("Login Successful");
        </script>';
        header("Location: feedbackmod.php");
        exit;
    }
    else{
      echo '<script type="text/JavaScript">
        alert("Login Invalid");
        </script>';
    }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="1.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="2.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body class="container content padding-32 light-grey">

<div class="card-4">

<div class="container black">
  <h2>Admin Log-In</h2>
</div>

<form class="container" method="post">

<label>Email</label>
<input class="input" type="text" id="email" name="email" required>

<label>Password</label>
<input class="input" type="password" id="password" name="password" required>

<button class="button black section left" type="submit">SEND</button>
<button class="button black section right" type="reset">RESET</button>
</form>

</div>







</body>
</html>