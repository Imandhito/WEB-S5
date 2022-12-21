<?php

include 'connect.php';


$id = $_POST['id_article'];
$title = $_POST["title"];
$text = $_POST["text"];
$category = $_POST["category"];

    $sql = "UPDATE article SET title='" . $title . "', text='" . $text . "', article_category_id ='". $category ."'  WHERE id =" . $id;

    $conn->query($sql);

    header("location: ../blog-details?id=$id.php");