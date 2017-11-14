<?php
session_start();
require_once "bdd.php";
$last_name = htmlspecialchars(trim(strtolower($_POST['last_name'])));
$name = htmlspecialchars(trim(strtolower($_POST['name'])));

if ( (empty($last_name) === true) || (empty($name) === true)){
    session_destroy();
    header('Location:../login.php?error=2');
}

$sql = "SELECT COUNT(*) as user_exist FROM guests where last_name = '$last_name' AND first_name = '$name'";
$query = executeSql(getConnection(),$sql);
while ($row = $query->fetch_assoc()) {
    if ($row['user_exist'] == 1) {
        $sql = "SELECT * FROM guests where last_name = '$last_name' AND first_name = '$name'";
        $query = executeSql(getConnection(),$sql);
        while ($row = $query->fetch_assoc()) {
            if ($row['vote'] == 0) {
                {
                    $_SESSION['id'] = $row['id'];
                    header('Location:vote.php');
                }
            } elseif ($row['vote'] == 1) {
                session_destroy();
                header('Location:../login.php?error=3');
            }
        }
    }
    else {
        session_destroy();
        header('Location:../login.php?error=1');
    }
}
