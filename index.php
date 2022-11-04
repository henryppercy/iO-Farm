<?php
require 'vendor/autoload.php';

$data = [
    "message" => "Invalid route, please check the API documentation.",
    "data" => []
];

echo '<p>' . $data['message'] . '</p>';
echo json_encode($data, true);