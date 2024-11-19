<?php

require_once "index.php";

header('Content-Type: application/json');

$seeder = new Seeder();

$osts = $seeder->createOSTs();

$ostArray = [];

foreach ($osts as $ost) {
    $ostArray[] = $ost->toArray();
}

echo json_encode($ostArray, JSON_PRETTY_PRINT);
?>
