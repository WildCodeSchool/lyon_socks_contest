<?php
session_start();
require_once 'bdd.php';
$id = $_SESSION['id'];
$voteNumber = count($_POST);

    $in = "(";
    foreach ($_POST as $value => $voteFor) {
        $in .= $voteFor . ",";
    }
    $likes = (substr($in, 0, -1));
    $likes .= ")";

    $sql = "update guests set likes = likes+1 where id in  $likes ";
    $sql1 = "update guests set vote = 1 where id =  $id ";
    $request = executeSql(getConnection(), $sql);
    $request->close;
    $request1 = executeSql(getConnection(), $sql1);

    session_destroy();

    header('Location:redirect.php');
