<?php

include 'connect.php';


$id = $_POST['id_user'];
$name = $_POST["name"];
$image = $path;
$passager = $_POST["passanger"];
$price = $_POST["price"];
$description = $_POST["description"];
$category = $_POST["category"];

    $sql = "UPDATE user SET name='" . $name . "', image='" . $image . "',passanger='" . $passanger . "', price='". $price ."', description='". $description ."', category='". $category . "'  WHERE id =" . $id;

    $conn->query($sql);

    header("location: ../vehicle-edit.php");