<?php
$client = new MongoDB\Driver\Manager("mongodb://birdnestdatabase:birdnestmongodb@BirdNestProject/BirdNestDB?retryWrites=true&w=majority");
var_dump($client);
header('content-type: application/json');
echo json_encode(['time' => time(), 'date' => date('d.m.Y'), 'tech' => 'Vercel']);
