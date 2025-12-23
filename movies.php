<?php
// movies.php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Movie data
$movies = [
    [
        "id" => 1,
        "name" => "Dune",
        "genre" => "Sci-Fi",
        "actors" => ["Timothee Chalamet","Zendaya","Rebecca Ferguson"]
    ],
    [
        "id" => 2,
        "name" => "Prestige",
        "genre" => "Drama",
        "actors" => ["Christian Bale","Hugh Jackman","Scarlett Johansson"]
    ],
    [
        "id" => 3,
        "name" => "12 Angry Men",
        "genre" => "Drama",
        "actors" => ["Henry Fonda","Lee J. Cobb","Martin Balsam"]
    ]
];

// Output JSON
echo json_encode($movies);
