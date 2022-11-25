<?php
include_once 'connect.php';

if(isset($_POST['email'])){
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql="SELECT * FROM user WHERE email ='".$email."' AND password='".$password."'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

if ($count==1) {
    header("Location:index.html");
}else{
    echo "WRONG PASSWORD OR USERNAME <br> <a href='pages-login.html'><button> BACK </button></a>".$conn->error;
}
}
?>