<?php
// mongodb+srv://birdnestdatabase:birdnestmongodb@cluster-0/test?retryWrites=true&w=majority
// mongodb://birdnestdatabase:birdnestmongodb@BirdNestProject
$client = new MongoDB\Driver\Manager("mongodb://birdnestdatabase:birdnestmongodb@BirdNestProject.BirdNestDB.com");
var_dump($client);


