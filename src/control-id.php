<?php

require_once "bdd.php";

$last_name = $_POST['last_name'];
$name = $_POST['name'];

$sql = "SELECT * FROM guests";

$query = executeSql(getConnection(),$sql);
while ($row = $query->fetch_assoc()) {
   if (($row['last_name'] == $last_name) && ($row['first_name'] == $name) ){
       if ($row['vote'] == 0){
           header('Location:vote.php?id=' .$row['id']);
       }
       else {
           header('Location:../public/login.php?error=3');
       }
       }
   elseif( empty($last_name) || empty($name)){
       header('Location:../public/login.php?error=2');
   }
   else{
       //header('Location:../public/login.php?error=1');
   }
}


