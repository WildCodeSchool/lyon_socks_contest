<?php

require_once 'bdd.php';

$extension_upload = explode("/",$_FILES['picture']['type']);
$extension =  $extension_upload[1];
$last_name  = trim(strtolower($_POST["last_name"]));
$name      = trim(strtolower($_POST["name"]));


$name_picture = $name.$last_name. "." .$extension;

$url = "imgsocks/" .$name_picture;

$resultat =  move_uploaded_file($_FILES['picture']['tmp_name'],$url);

$sql ="INSERT INTO guests (firt_name, lastname, picture_url) VALUES ('$name', '$last_name', '$url')";
$exec = executeSql(getConnection(),$sql);


if ($resultat == true){
    header("Location:redirection.php");
} else { header("Location:../public/index.php?error=1"); }

