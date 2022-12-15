<?php

include_once 'connect.php';

$id=$_GET['id'];

$sql = "DELETE FROM article WHERE id=".$id;
$conn->query($sql);
header("Location: ../blog.php");
// if (){
//     echo $id;
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }