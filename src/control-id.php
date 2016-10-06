<?php

$last_name = $_POST['last_name'];
$name = $_POST['name'];
$query = "SELECT * FROM guests WHERE last_name ='$last_name' && first_name = '$name'";

/*
 * Verification of the existing id for guest
 */
function verifId() {
    if (mysql_num_rows($query) == 0){
        header('Location:../public/login.php?error=1');
    }

    elseif (mysql_num_rows($query) == 1) {

    } else {

    }
}