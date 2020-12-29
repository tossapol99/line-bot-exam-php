<?php
require "vendor/autoload.php";

$access_token = 'sQIhQpJuigcattjZwq6w7Oc+lfFkFarRlGwNWGkTE7R0yZr1IiFtjStWqN52NGxQzFkUtxBnoQsEUTOp4rcaZY+NxB1+aRS7c3NgsODk16TIFeqNbMUZzVK7S4EJ4WTWiLn6awsB0x760+oawwbFAFGUYhWQfeY8sLGRXgo3xvw=';
$userId = 'Uc2b199a976d4926471571a28e3713aec';

// ข้อความที่ต้องการส่ง
$messages = array(
    'type' => 'text',
    'text' => 'ทดสอบการส่งข้อความ',
);
$post = json_encode(array(
    'to' => array($userId),
    'messages' => array($messages),
));
// URL ของบริการ Replies สำหรับการตอบกลับด้วยข้อความอัตโนมัติ
$url = 'https://api.line.me/v2/bot/message/multicast';
$headers = array('Content-Type: application/json', 'Authorization: Bearer '.$access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
echo $result;