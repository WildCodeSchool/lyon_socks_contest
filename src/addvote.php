<?php

require_once 'bdd.php';
$id = $_GET['id'];
$voteNumber = count($_POST);

if ( $voteNumber <= 2){
    header("Location:vote.php?id=" .$id. "&error=1");
}
elseif ($voteNumber >= 4) {
    header("Location:vote.php?id=" .$id. "&error=2");
}
    $in = "(";
    foreach ($_POST as $value => $voteFor) {
        $in .= $voteFor . ",";
    }
    $likes =(substr($in, 0, -1));
    $likes .= ")";

    $sql = "update guests set likes = likes+1 where id in  $likes ";
    $sql1 = "update guests set vote = 1 where id =  $id ";
    $request = executeSql(getConnection(),$sql);
$request->close;
    $request1= executeSql(getConnection(),$sql1);
    header('Location:redirect.php');