<?php
$_SERVER['DOCUMENT_ROOT'] = getcwd();
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/"."autoload.php";


$url = "https://amazon.com";
$client = new \GuzzleHttp\Client();
$response = $client->request('GET', $url);

$status = $response->getStatusCode(); // 200
$header = $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
$html = $response->getBody(true);
#$xml = $response->xml(); // For XML response
#$json = $response->json(); // For JSON response
echo $html;