<?php
include 'connect.php';
$name = $_POST["name"];
$sql = "INSERT INTO vehicle_category(name) VALUES ('" . $name . "')";

if ($conn->query($sql)) {
    header('location: ../vehicle-category.php');
} else {
    echo "Error :" . $conn->error;
}