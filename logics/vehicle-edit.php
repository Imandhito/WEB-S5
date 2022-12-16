<?php

include 'connect.php';


$id = $_POST['id_vehicle'];
$name = $_POST["name"];
$passanger = $_POST["passanger"];
$price = $_POST["price"];
$description = $_POST["description"];
$category = $_POST["category"];

    $sql = "UPDATE vehicle SET name='" . $name . "', passanger='" . $passanger . "', price='". $price ."', description='". $description ."', vehicle_category_id='". $category . "'  WHERE id =" . $id;

    $conn->query($sql);

    header("location: ../vehicle-manage.php");