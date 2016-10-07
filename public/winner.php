<?php

require_once '../src/bdd.php';
$sql = "select * from guests order by likes DESC limit 3";
$req = executeSql(getConnection(),$sql);
while ($row = $req->fetch_assoc()) {
    echo "<div>" .$row['last_name']. "</div><div>" .$row['first_name']. "</div><div><img src=\"../src/" .$row['picture_url']. "\"/></div>" ;
}