<?php

include 'connect.php';



$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];

$img_ex = pathinfo($filename, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);

$filename = uniqid('', true).'.'.$img_ex_lc;
$path = "..assets/img/hero/blog/" . $filename;






try {

    // Undefined | Multiple Files | $_FILES Corruption Attack
    // If this request falls under any of them, treat it invalid.
    if (
        !isset($_FILES['image']['error']) ||
        is_array($_FILES['image']['error'])
    ) {
        throw new RuntimeException('Invalid parameters.');
    }

    // Check $_FILES['upfile']['error'] value.
    switch ($_FILES['image']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }

    // You should also check filesize here.
    /* if ($_FILES['image']['size'] > 1000000) {
        throw new RuntimeException('Exceeded filesize limit.');
    } */

    // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
    // Check MIME Type by yourself.
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    if (false === $ext = array_search(
        $finfo->file($_FILES['image']['tmp_name']),
        array(
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
        ),
        true
    )) {
        throw new RuntimeException('Invalid file format.');
    }

    // You should name it uniquely.
    // DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
    // On this example, obtain safe unique name from its binary data.
    // /srv/http/WEB-S5/
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
        /* sprintf(
            './uploads/%s.%s',
            sha1_file($_FILES['image']['tmp_name']),
            $ext 
        )*/
        throw new RuntimeException('Failed to move uploaded file.');
    }

    echo 'File is uploaded successfully.';
} catch (RuntimeException $e) {

    echo $e->getMessage();
}


$id = $_POST['id_vehicle'];
$image = $filename;

    $sql = "UPDATE vehicle SET img_url='" . $image . "'  WHERE id =" . $id;

    $conn->query($sql);

    header("location: ../vehicle-manage.php");