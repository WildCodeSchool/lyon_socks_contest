<?php

$extension_upload = explode("/",$_FILES['picture']['type']);
$extension =  $extension_upload[1];
$last_name  = strtolower($_POST["last_name"]);
$name      = strtolower($_POST["name"]);

$name_picture = $name.$last_name. "." .$extension;

$url = "imgsocks/" .$name_picture;

$resultat =  move_uploaded_file($_FILES['picture']['tmp_name'],$url);


if ($resultat == true){
    header("Location:redirection.php");
} else { header("Location:../public/index.php?error=1"); }
