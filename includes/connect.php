<?php

$dbh = new PDO('mysql:host=localhost;dbname=RAPP', "manager", "sql4fun");
$result = $dbh->prepare($query);
$result->execute();

?>