<?php

//recupero dati dal file json
$file = file_get_contents("dati.json");

//aggiunta dati in file json se i dati sono presenti
if (isset($_POST["orario"]) && isset($_POST["azione"])) {
    echo 'ciao';
}

header('Content-Type: application/json');

//stampo i file
echo $file;
