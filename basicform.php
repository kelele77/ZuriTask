<?php

$errors = [];
$username = '';
$email = '';
$password = '';
$DOB = '';
$phone_number = '';
$postData = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = post_data($_POST["Username"]);
  $email = post_data($_POST["email"]);
  $password = post_data($_POST["Password"]);
  $DOB = post_data($_POST["dateOfBirth"]);
  $phone_number = post_data($_POST["Phone"]);

}

function post_data($field)
{
    if (!isset($_POST[$field])) {
        return false;
    }
    $data = $_POST[$field];
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

 <!Doctype html>
<html>
<head>
<title>Basic Form</title>
<link rel="stylesheet" href="style.css">
</head>
    <body>
     <h1>Zuri Registration</h1>
        <form action="zuriformaction.php" method="post" ><br>

            <div class="form-element">
                 <label>Username</label>
                    <input type="text" name="Username" required><br>
            </div>

            <div class="form-element">
                 <label>Email</label>
                     <input type="text" name="email" required><br>
            </div>

            <div class="form-element">
                <label>Password</label>
                    <input type="password" name="Password" required>
            </div>

            <div class="form-element">
                <label>Date of Birth</label><br>
                    <input type="date" name="dateOfBirth">
            </div>

            <div class="form-element">
                <label>Phone Number</label>
                     <input type="text" name="Phone"><br>
            </div>
                <button type="submit" name="submit">submit</button>
        </form>
               <strong><p>Existing user?<p></strong>
               <strong><a href="http://../login.php">Click to Login</a></strong>
    </body>
</html>
