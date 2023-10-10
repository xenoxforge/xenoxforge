<?php
session_start();

$url = "localhost";
$username = "root";
$password = "";
$database = "homeland";
$init = mysqli_connect($url, $username, $password, $database);

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = trim($_POST['text']);
    $query = mysqli_query($init, "INSERT INTO description VALUES ('', '$text','$email')");
    if ($query) {
       echo "pass";
    }
}
}