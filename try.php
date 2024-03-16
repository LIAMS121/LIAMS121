<?php
require_once("includes/database.php");
require_once("includes/session.php");
$sqlSelect = "SELECT *
FROM measurement
WHERE date_ordered >= DATE_SUB(CURDATE(), interval 1 day);";
$statement = $connection->prepare($sqlSelect);
$statement->execute();
foreach ($statement as $details) {
    echo $details['date_ordered'] . "</br>";
}
