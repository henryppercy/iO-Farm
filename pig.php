<?php
require 'vendor/autoload.php';

header('Content-Type: application/json; charset=utf-8'); // This will always contain json

// TODO: Validate $_GET['id']
$pigService = new FarmAPI\Services\PigService();
$pig = $pigService->getPig($_GET['id']);

$data = [
    "message" => "Successfully retrieved pig",
    "data" => $pig
];

echo json_encode($data, true);