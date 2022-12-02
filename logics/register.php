<?php
include_once 'connect.php';
$name = $email = $hobby = $address = $gender = $password = "";

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$sql = "INSERT INTO user(name, email, role, password, phone) VALUES ('" . $name . "', '" . $email . "', 'user', '" . $password . "','" . $phone . "')";


if ($conn->query($sql)) {
    header('location: ../login.php');
} else {
    echo "Error :" . $conn->error;
}