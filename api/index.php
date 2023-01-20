<?php
// mongodb+srv://birdnestdatabase:birdnestmongodb@cluster-0/test?retryWrites=true&w=majority
// mongodb://birdnestdatabase:birdnestmongodb@BirdNestProject
$client = new MongoDB\Driver\Manager("mongodb+srv://birdnestdatabase:birdnestmongodb@BirdNestProject/test?retryWrites=true&w=majority");

$db = $client->test;
