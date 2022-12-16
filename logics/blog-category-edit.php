<?php
include 'connect.php';


$id = $_POST['id_category'];
$name = $_POST["name"];

    $sql = "UPDATE article_category SET name='" . $name . "' WHERE id =" . $id;

    $conn->query($sql);

    header("location: ../blog-category.php");