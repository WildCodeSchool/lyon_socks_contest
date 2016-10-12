<?php

require_once "bdd.php";

$last_name = htmlspecialchars(trim(strtolower($_POST['last_name'])));
$name = htmlspecialchars(trim(strtolower($_POST['name'])));

if ( (empty($last_name) === true) || (empty($name) === true)){
    header('Location:../public/login.php?error=2');
}

$sql = "SELECT * FROM guests";
$query = executeSql(getConnection(),$sql);
while ($row = $query->fetch_assoc()) {
    if (($row['last_name'] == $last_name) && ($row['first_name'] == $name)) {
        if ($row['vote'] == 0) {
            header('Location:vote.php?id=' .$row['id']);
        } elseif ($row['vote'] == 1) {
            header('Location:../public/login.php?error=3');
        } else {
            header('Location:../public/login.php?error=1');
        }
    }
}

