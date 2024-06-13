<?php

$toDO = [
    [
        'orario' => '08:30',
        'azione' => 'scegliarsi'
    ],
    [
        'orario' => '09:30',
        'azione' => 'iniziare lezione boolean'
    ],
    [
        'orario' => '11:00',
        'azione' => 'fare pausa caffè'
    ],
    [
        'orario' => '13:00',
        'azione' => 'pranzare'
    ],
    [
        'orario' => '15:00',
        'azione' => 'svolgere esercizi'
    ],
    [
        'orario' => '17:00',
        'azione' => 'andare a correre'
    ]
];

header('Content-Type; application/jason');

$jasonString = json_encode($toDo);

echo $jasonString;
