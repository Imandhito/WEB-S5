<?php

include_once 'connect.php';
session_start();
  if (!isset($_SESSION['user_id'])) {
    header("location:login.php");
  }

$id=$_GET['id'];

$sql = "DELETE FROM article WHERE id=".$id;
$conn->query($sql);
header("Location: ../blog-manage.php");
// if (){
//     echo $id;
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }