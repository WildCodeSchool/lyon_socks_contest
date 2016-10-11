<?php
require_once 'bdd.php';
require "../vendor/autoload.php";
use Gregwar\Image\Image;

if ( (isset($_POST["last_name"])) && (isset($_POST['name'])) && (isset($_FILES['picture']))) {
    $extension_upload = explode("/", $_FILES['picture']['type']);
    $extension = $extension_upload[1];
    $last_name = htmlspecialchars(trim(strtolower($_POST["last_name"])));
    $name = htmlspecialchars(trim(strtolower($_POST["name"])));


    if ( (empty($last_name) === true) || (empty($name) === true)){
        $name_picture = md5($name.$last_name). "." . $extension;
        $url = "imgsocks/" .$name_picture;
        $treatment = Image::open($_FILES['picture']['tmp_name'])
            ->cropResize(500, 500)
            ->save($url);

        if ($treatment == true){
            $sql ="INSERT INTO guests (first_name, last_name, picture_url) VALUES ('$name', '$last_name', '$url')";
            $exec = executeSql(getConnection(),$sql);
            header("Location:redirection.php");
        }
        else {
            header("Location:../public/index.php?error=1");
        }
    }   else {
        header("Location:../public/index.php?error=1");
    }

} else {
    header("Location:../public/index.php?error=1");
}




