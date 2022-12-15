<?php 

include_once __DIR__ . "/../../db.php";

header('Content-type: application/json');

echo json_encode($database);


?>