<?php

include 'connect.php';


$id=$_POST['id'];

$sql = "DELETE FROM user WHERE id=".$id;
$conn->query($sql);
/*if (){
    echo $id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/