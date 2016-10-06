<?php

/*
 * Connection to Database
 */

function getConnection()
{
    $user = "root";
    $password = "root";
    $host = "localhost";
    $db = "socketparty";

    $mysqli = new mysqli($host, $user, $password, $db);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL : (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
        die();
    }
    return $mysqli;

}
 /*
  * database manipulation
  */
function executeSql($mysqli, $sql) {
    if (!$result = $mysqli->query($sql)) {
        echo "failed to run query :(" . $mysqli->errno . ") " . $mysqli->error;
        die();
    }
    return $result;
}




