<?php
require 'vendor/autoload.php';

header('Content-Type: application/json; charset=utf-8'); // This will always contain json

$data = [
    "message" => "Successfully retrieved pig",
    "data" => ['Denis']
];

echo json_encode($data, true);