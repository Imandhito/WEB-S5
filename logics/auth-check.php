<?php
session_start();
if (!isset($_SESSION['user_id'])) { // Check auth
    header("Location:login.php");
}

$auth_id = $_SESSION['user_id'];
$auth_name = $_SESSION['name'];
$auth_photo = $_SESSION['photo_profile'];
$auth_email = $_SESSION['email'];
$auth_job = $_SESSION['job'];
$auth_role = $_SESSION['role'];

/* $sql_user = 'SELECT * FROM user';
$result_user = $conn->query($sql_user);
$data = $result_user->fetch_object(); */
