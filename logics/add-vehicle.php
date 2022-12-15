<?php
include_once 'connect.php';

$name = $_POST["name"];
$image = $_POST["image"];
$kapasitas = $_POST["kapasitas"];
$price = $_POST["price"];
$description = $_POST["description"];
$category = $_POST["category"];
$sql = "INSERT INTO vehicle(name, img_url, passanger,price,description,vehicle_category_id) VALUES ('" . $name . "', '" . $image . "', '".$kapasitas."', '" . $price . "','" . $description . "','".$category."')";


if ($conn->query($sql)) {
    header('location: ../vehicle.php');
} else {
    echo "Error :" . $conn->error;
}
