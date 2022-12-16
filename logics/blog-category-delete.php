<?php

include_once 'connect.php';

$id=$_GET['id'];

$sql = "DELETE FROM article_category WHERE id=".$id;
$conn->query($sql);

header("Location: ../blog-category.php");