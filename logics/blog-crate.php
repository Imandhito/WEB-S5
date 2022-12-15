<?php
include_once 'connect.php';
$name = $email = $hobby = $address = $gender = $password = "";

$title = $_POST["Title"];
$text = $_POST["Article Text"];
$img_url = $_POST["Image Link"];
$sql = "INSERT INTO blog(title, text, role, img_url) VALUES ('" . $$title . "', '" . $text . "', 'user', '" . $img_url . "')";


if ($conn->query($sql)) {
    header('location: ../login.php');
} else {
    echo "Error :" . $conn->error;
}


?>