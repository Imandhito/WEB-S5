<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit</title>
</head>

<body>

    <?php

    /* if (!) {
    echo("Error description: " . $mysqli -> error);
  }
 */
    include_once "../connect.php";

    $id = $_POST['id_user'];
    $name = $_POST['name'];
    $about = $_POST['about'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    echo $id;
    $sql = "UPDATE user SET email='" . $email . "', name='" . $name . "',job='" . $job . "',about='" . $about . "',country='" . $country . "',address='" . $address . "',phone='" . $phone . "'  WHERE id =" . $id;

    $conn->query($sql);
    header("location: ../users-profile.php?id=" . $id);


    ?>


</body>

</html>