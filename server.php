<?php


header('Content-Type: application/json');

$jsonString = json_encode($toDO);

echo $jsonString;
