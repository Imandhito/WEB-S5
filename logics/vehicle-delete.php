<?php

include_once 'connect.php';


$id=$_GET['id'];

$sql = "DELETE FROM vehicle WHERE id=".$id;
$conn->query($sql);
header("Location: ../vehicle-manage.php");