<?php
session_start();
 $_SESSION['Username'] = 'nonye';

if(isset($_POST['submit'])){
    $username = $_POST['Username'];
    $email = $_POST['email'];
    $password = $_POST['Password'];
    $DOB = $_POST['dateOfBirth'];
    $phone_number = $_POST['Phone'];

    $file = [
        'Username' => $username,
        'email' => $email,
        'Password' => $password,
        'dateOfBirth' => $DOB,
        'Phone' => $phone_number,
    ];

    file_put_contents('files/' . $file['Username'] . ".json", json_encode($file));
}

    echo $username . '<br>';
    echo $email . '<br>';
    echo $password . '<br>';
    echo $DOB . '<br>';
    echo $phone_number . '<br>';

    if (isset($_SESSION['Username'])) {
  header("Location: home.php");
  exit();
}