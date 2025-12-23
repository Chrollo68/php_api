<?php
header("Location: movies.php");
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

require_once "movies.php";

$response = [
    "success" => true,
    "count" => count($movies),
    "data" => $movies
];

echo json_encode($response);
