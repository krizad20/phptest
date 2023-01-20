<?php
$client = new MongoDB\Driver\Manager("mongodb://mongodb+srv://birdnestdatabase:birdnestmongodb@cluster-0/test?retryWrites=true&w=majority");
$db = $client->test;
header('content-type: application/json');
echo json_encode(['time' => time(), 'date' => date('d.m.Y'), 'tech' => 'Vercel']);
