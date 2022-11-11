<?php
include_once 'connect.php';
$name = $email = $hobby = $address = $gender = $password = "";

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$sql = "INSERT INTO user(email, password, name, phone) VALUES ('".$name."', '".$email."', '".$password."','".$phone."')";


if ($conn->query($sql)) {
    header('location:pages-register.html');
}else{
    echo "Error :".$conn->error;
}