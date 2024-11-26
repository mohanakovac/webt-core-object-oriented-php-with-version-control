<?php

require_once "src/seeder.php";
require_once "src/song.php";
require_once "src/OST.php";

$seeder = new seeder();
$data = $seeder->generateData();


if (isset($_GET['ost_id']) && $_GET['ost_id'] > 0 && $_GET['ost_id'] <= count($data)) {
    $ostId = $_GET['ost_id'] - 1;
    header('Content-Type: application/json');
    echo json_encode($data[$ostId]);
    exit;
}

if (isset($_GET['ost_id']) && ($_GET['ost_id'] < 0 || $_GET['ost_id'] >= count($data))) {
    header('Content-Type: application/json');
    echo json_encode('Oh Oh die OST gibt es nicht!');
}


if (isset($_GET['all']) || !isset($_GET['ost_id'])) {
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}




/*
foreach ($data as $ost) {
    echo "OST Name: {$ost->name}<br>";
    echo "Video Game Name: {$ost->videoGameName}<br>";
    echo "Release Year: {$ost->releaseYear}<br>";
    echo "Track List:<br>";
    foreach ($ost->trackList as $song) {
        echo "- {$song->name} by {$song->artist}<br>";
    }
    echo "<br>";
}