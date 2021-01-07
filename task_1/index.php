<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('GET', 'https://itea.ua/');

// echo $response->getStatusCode() . "<br />";
// echo $response->getHeaderLine('content-type') . "<br />";
echo $response->getBody(); 