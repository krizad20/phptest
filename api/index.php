<?php
$client = new MongoDB\Driver\Manager("mongodb://birdnestdatabase:birdnestmongodb@BirdNestProject/?authSource=BirdNestDB");
$db = $client->test;
header('content-type: application/json');
echo json_encode(['time' => time(), 'date' => date('d.m.Y'), 'tech' => 'Vercel']);
