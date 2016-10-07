<?php
var_dump($_POST);

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
var_dump($likes);
    $sql = "updte  in " . $in;

