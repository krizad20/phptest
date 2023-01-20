<?php
$client = new MongoDB\Driver\Manager("mongodb://birdnestdatabase:birdnestmongodb@BirdNestProject");

$filter = ['id' => 2];
$options = [
   'projection' => ['_id' => 0],
];
$query = new MongoDB\Driver\Query($filter, $options);
$rows = $client->executeQuery('BirdNestDB.Customer_info', $query); // $mongo contains the connection object to MongoDB
foreach($rows as $r){
   print_($r);
}
header('content-type: application/json');
echo json_encode(['time' => time(), 'date' => date('d.m.Y'), 'tech' => 'Vercel']);
