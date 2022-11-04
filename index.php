<?php
require 'vendor/autoload.php';

header('Content-Type: application/json; charset=utf-8'); // This will always contain json

$data = [
    "message" => "Invalid route, please check the API documentation.",
    "data" => []
];

echo json_encode($data, true);