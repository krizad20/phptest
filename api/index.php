<?php
// mongodb+srv://birdnestdatabase:birdnestmongodb@cluster-0/test?retryWrites=true&w=majority
// mongodb://birdnestdatabase:birdnestmongodb@BirdNestProject
$client = new MongoDB\Driver\Manager("mongodb://birdnestdatabase:birdnestmongodb@BirdNestProject.com");

$filter = ['id' => '001'];
$options = [
   'projection' => ['_id' => 0],
];
$query = new MongoDB\Driver\Query($filter, $options);
$rows = $client->executeQuery('BirdNestDB.my_collection', $query); // $mongo contains the connection object to MongoDB
foreach($rows as $r){
   print_($r);
}



