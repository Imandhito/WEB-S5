<?php
include_once 'connect.php';

if (isset($_POST['email'])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE email ='" . $email . "' AND password='" . $password . "'";

    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        session_start();
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["name"] = $row['name'];
        $_SESSION["photo_profile"] = $row['profile_picture'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["job"] = $row['job'];
        $_SESSION["role"] = $row['role'];
        header("Location: ../home.php");
    } else {
        echo "WRONG PASSWORD OR USERNAME <br> <a href='../login.php'><button> BACK </button></a>" . $conn->error;
    }
}
