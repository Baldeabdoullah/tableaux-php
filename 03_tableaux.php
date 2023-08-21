<?php

// LES TABLEAUX 

// tableaux simple

$nombres = [1, 25, 14, 180, 50, 'a', true, 'Kamdjou'];
$numbers = array(1, 25, 14, 180, 50, 'a', true, 'Kamdjou');

$fuits = array('Ananas', 'Bananas', 'Orange', 'Papaye', 'Avocat');

// print_r($nombres[0]);

// var_dump($nombres);

// var_dump($numbers);

// var_dump($fuits[2]);

// Tableaux associes

$personne =  [
    'nom' => 'Kamdjou',
    'prenom' => 'Duplex',
    'email' => 'bprodev@gmail.com',
    'age' => 50
];

$utilisateurs = [

    [
        'nom' => 'Kamdjou',
        'prenom' => 'Duplex',
        'email' => 'bprodev@gmail.com',
        'age' => 50
    ],

    [
        'nom' => 'tamfax',
        'prenom' => 'marie',
        'email' => 'bpro@gmail.com',
        'age' => 47
    ],

    [
        'nom' => 'boris',
        'prenom' => 'hadin',
        'email' => 'borisv@gmail.com',
        'age' => 26
    ],

    [
        'nom' => 'omar',
        'prenom' => 'khan',
        'email' => 'omar@gmail.com',
        'age' => 23
    ]
];


// print_r($utilisateurs[1]['email']);



// print_r("je m'appelle" . ' ' . $utilisateurs[3]['nom'] . ' ' . $utilisateurs[3]['prenom']);

// ou on fait 

$nom =  $utilisateurs[3]['nom'];
$prenom =  $utilisateurs[3]['prenom'];

print_r("je m'appelle $nom $prenom ");
