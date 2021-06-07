<?php
require 'vendor/autoload.php';
session_start();
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->redclouds->posts;
$data = [
    "username"=>$_SESSION["user"]["nombre"],
    "userid"=>(string)$_SESSION["user"]["_id"],
    "texto"=>$_POST["texto"],
    "fechahora"=>time(),
    "likes"=>0
];
$insertOneResult = $collection->insertOne($data);
header("Location: home.php");
?>