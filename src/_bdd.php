<?php

/*
 * Connection to Database
 */

function getConnection()
{
    $user = "root";
    $password = "azerty1234";
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

/**
 * get latest id in table
 */
function getLatestId() {
    return getConnection()->insert_id;
}

/**
 * get id from full name
 */
function getId($firstName, $lastName) {
    $sql = "SELECT id FROM guests where last_name = '$lastName' AND first_name = '$firstName'";
    $query = executeSql(getConnection(),$sql);
    $row = $query->fetch_assoc();
    return $row['id'];
}




