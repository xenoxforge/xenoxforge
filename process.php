<?php
session_start();

$url = "localhost";
$username = "root";
$password = "";
$database = "homeland";
$init = mysqli_connect($url, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $_SESSION['email'] = $email;
    $query = mysqli_query($init, "INSERT INTO reach VALUES ('', '$fullname','$email','$phone')");
    if ($query) {
       echo "pass";
    }
}
