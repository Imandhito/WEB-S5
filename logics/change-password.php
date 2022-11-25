<!DOCTYPE html>
<html lang="en">

<head>
    <title>Change password</title>
</head>

<body>

    <?php

    include_once "connect.php";

    $id = $_POST['id_user'];
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $sql_get_pass = "SELECT password FROM user WHERE id=" . $id;
    $result = $conn->query($sql_get_pass);

    $value = $result->fetch_object();

    if (strcmp($value->password, $current_password) == 0) {
        if (strcmp($new_password, $confirm_password) == 0) {
            $sql = "UPDATE user SET password='" . $new_password . "' WHERE id =" . $id;
            $conn->query($sql);
            header("location: ../users-profile.php?id=" . $id);
        } else {
            echo "Confirm and new password are not same";
        }
    } else {
        echo "Current and old password are not same";
    }


    /* if (isset($_POST["submit"]) ) {

    
}
else {
    //echo "<script>window.location.href='signup.php';</script>";
    echo "Something went wrong";
} */

    //`profile_picture`='[value-9]',

    ?>


</body>

</html>