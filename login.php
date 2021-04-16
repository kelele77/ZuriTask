<?php
session_start();
$_SESSION['Username'] = 'nonye';

$file = fopen("cassy.json", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($file)) {
  echo fgets($file) . "<br>";
}
fclose($file);


?>


<!DOCTYPE html>
<head>
<title></title>
    <link rel="stylesheet" href="loginstyle.css">
<body style="padding: 30px;">
  <form action="zuriformaction.php" id="login-form" method="post">
    <h1>Zuri Sign In</h1>
      <label for="Username">Username</label>
        <input type="text" name="user" required/>
      <label for="password">Password</label>
        <input type="password" name="password" required/>
        <input type="submit" value="Sign In"/>
      <h6>forgot password?
         <a href="http://localhost/Kelechi/newpassword.php">Create New Password</a>
     </h6>
  </form>
</body>
</html>
