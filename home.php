<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST['logout'])) { unset($_SESSION['Username']); }

// (C) REDIRECT TO LOGIN PAGE IF NOT LOGGED IN
if (!isset($_SESSION['Username'])) {
  header("Location: login.php");
  die();
}
?>
<!Doctype html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="style.css">
</head>
    <body>
     <h1>Welcome To Zuri</h1>
     <h3>Do have a wonderful learning adeventure</h3>
         <strong><a href="login.php">Logout</a></strong>
</body>
</html>
