<?php
require "vendor/autoload.php";

$access_token = 'sQIhQpJuigcattjZwq6w7Oc+lfFkFarRlGwNWGkTE7R0yZr1IiFtjStWqN52NGxQzFkUtxBnoQsEUTOp4rcaZY+NxB1+aRS7c3NgsODk16TIFeqNbMUZzVK7S4EJ4WTWiLn6awsB0x760+oawwbFAFGUYhWQfeY8sLGRXgo3xvw=';

$channelSecret = '24dbd4589ca06c84af3e61a2128c19f0';
$idPush = 'Uc2b199a976d4926471571a28e3713aec'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();