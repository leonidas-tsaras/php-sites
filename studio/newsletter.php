<?php
header('Content-Type: application/json');

// Read raw POST data
$data = file_get_contents("php://input");

// Decode JSON
$decodedData = json_decode($data, true);

$f = fopen('emails.txt', 'a');
$n = fwrite($f, $decodedData["email"] . "\n");
fclose($f);

if ($decodedData) {
  echo json_encode(["message" => "OK"]);
} else {
  echo json_encode(["message" => "NOTOK"]);
}
