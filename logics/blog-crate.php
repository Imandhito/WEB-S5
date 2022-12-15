<?php
include_once 'connect.php';
session_start();

$tittle = $text = $img_url = $article_category = $user_id = "";

$tittle = $_POST["title"];
$text = $_POST["text"];
$img_url = $_POST["image_url"];
$article_category_id = $_POST["tag"];
$user_id = $_SESSION["user_id"];
$sql = "INSERT INTO article(title, text, img_url, article_category_id, user_id) VALUES ('" . $tittle . "', '" . $text . "', '" . $img_url . "', '" . $article_category_id . "','" . $user_id . "')";


if ($conn->query($sql)) {
    header('location: ../blog.php');
} else {
    echo "Error :" . $conn->error;
}
?>