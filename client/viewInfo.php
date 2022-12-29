<?php
include "../database/Database.php";

$query = "SELECT * FROM employee";
$stmt = $connection->prepare($query);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach ($stmt->fetchAll() as  $array) {
    foreach($array as $key => $value)
    echo "<option value=$value>$value</option>" ;
}

?>