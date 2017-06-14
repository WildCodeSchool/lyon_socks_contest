<?php
session_start();
require_once 'bdd.php';
require "../vendor/autoload.php";
use Gregwar\Image\Image;

if ( (isset($_POST["last_name"])) && (isset($_POST['name'])) && (isset($_FILES['picture']))) {
    $extension_upload = explode("/", $_FILES['picture']['type']);
    $extension = $extension_upload[1];
    $last_name = htmlspecialchars(trim(strtolower($_POST["last_name"])));
    $name = htmlspecialchars(trim(strtolower($_POST["name"])));
    $email = htmlspecialchars(trim(strtolower($_POST["email"])));


    if (isset($last_name) && isset($name)) {
        $md5 = md5($name.$last_name);
        $rawUrl = "imgsocks/" . $md5 . "_raw" . "." . $extension;
        $url = "imgsocks/" . $md5 . "." . $extension;
        if (move_uploaded_file($_FILES['picture']['tmp_name'], $rawUrl)) {
            Image::open($rawUrl)
                ->cropResize(500, 500)
                ->save($url);

            $sql = "INSERT INTO guests (first_name, last_name, picture_url, email) VALUES ('$name', '$last_name', '$url', '$email')";
            $exec = executeSql(getConnection(), $sql);
            header("Location:redirection.php");
        } else {
            session_destroy();
            header("Location:../public/index.php?error=14");
        }

    } else {
        session_destroy();
        header("Location:../public/index.php?error=13");
    }
}
else {
    session_destroy();
    header("Location:../public/index.php?error=12");
}





