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
    include_once "connect.php";

    $id = $_POST['id_user'];
    $name = $_POST['name'];
    $about = $_POST['about'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $twitter = $_POST['twitter'];

    $my_image = $_FILES['my_image'];
    $img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
    //$sql = "UPDATE user SET email='" . $email . "', name='" . $name . "',job='" . $job . "',about='" . $about . "',country='" . $country . "',address='" . $address . "',phone='" . $phone . "'  WHERE id =" . $id;
    
    
    
	if(isset($_FILES['my_image'])){
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid('', true).'.'.$img_ex_lc;
            $img_upload_path = 'photo/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);
            $sql = "UPDATE user SET twitter='" . $twitter . "', profile_picture='".$new_img_name ."', email='" . $email . "', name='" . $name . "',job='" . $job . "',about='" . $about . "',country='" . $country . "',address='" . $address . "',phone='" . $phone . "' WHERE id=" . $id;
            $conn->query($sql);
            header("location: ../users-profile.php");
        }
        else {
            $sql2 = "UPDATE user SET twitter='" . $twitter . "', email='" . $email . "', name='" . $name . "',job='" . $job . "',about='" . $about . "',country='" . $country . "',address='" . $address . "',phone='" . $phone . "' WHERE id=" . $id;
            $conn->query($sql2);
            header("location: ../users-profile.php");
        }
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