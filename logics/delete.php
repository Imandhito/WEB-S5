<?php

include_once 'connect.php';

$id=$_GET['id'];

$sql = "DELETE FROM user WHERE id=".$id;
$conn->query($sql);
header("Location: ../users.php");
// if (){
//     echo $id;
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }