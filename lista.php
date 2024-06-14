<?php

//recupero dati dal file json
$file = file_get_contents("dati.json");

//aggiunta dati in file json se i dati sono presenti
if (isset($_POST["orario"]) && isset($_POST["azione"])) {


    //importo arrray jason in PHP e lo converto
    $toDo = json_decode($file, true);


    //Creo nuova azione
    $newAction = [
        "orario" => $_POST["orario"],
        "azione" => $_POST["azione"]
    ];

    //Inserireco nuova azione nell'array
    $toDo[] = $newAction;

    //Converto il file php in JSON
    $file = json_encode($toDo);

    //Esporto i dati nel file JSON
    file_put_contents('dati.json', $file);
}
header('Content-Type: application/json');

//stampo i file
echo $file;
