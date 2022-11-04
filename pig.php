<?php

require 'vendor/autoload.php';

header('Content-Type: application/json; charset=utf-8');

use FarmAPI\Validators\IdValidator;

if (!isset($_GET['id']) || !IdValidator::valid($_GET['id'])) {
    http_response_code(500);
    $data = [
        "message" => "Bad Request",
        "data" => []
    ];
    echo json_encode($data, true);
    exit();
}

try {
    $pigService = new FarmAPI\Services\PigService();
    $pig = $pigService->getPig($_GET['id']);

    $data = [
        "message" => "Successfully retrieved pig",
        "data" => $pig
    ];
} catch (InvalidArgumentException $exception) {
    http_response_code(400);
    $data = [
        "message" => "Bad Request",
        "data" => []
    ];
} catch (Exception $exception) {
    http_response_code(500);
    $data = [
        "message" => "Bad Request",
        "data" => []
    ];
}

echo json_encode($data, true);