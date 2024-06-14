<?php

//recupero dati dal file json
$file = file_get_contents("dati.json");

header('Content-Type: application/json');

//stampo i file
echo $file;
