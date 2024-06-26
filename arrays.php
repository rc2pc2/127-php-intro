<?php 


$shoppingList = [
    "arma" => "Lanciafiamme", // = >
    "frutto" => "Pesche",
    "dessert" => "Melone",
    "proteina" => "Prosciutto Vegano"
];

// array_push($shoppingList, "monti", "colline", "monticelli", "monti", "monti");
// array_unshift($shoppingList, "montagna");
$shoppingList["mezzo"] = "Mare";

var_dump($shoppingList);

// # array di array associativi
$team = [ 
    [ 
        "name" => "Geena",
        "lastname" => "Ginetti",      
        "role" => "SUPERFOUNDER",  
    ],
        
    [        
        "name" => "Michele",   
        "lastname" => "Papagni",
        "role" => "Head of Teaching",        
    ],

    [        
        "name" => "Giggiona",   
        "lastname" => "Lorenzetti",
        "role" => "CEO",        
    ]
];

var_dump($team);
// var_dump(rand(1,5));

foreach ($shoppingList as $chiave => $valore) {
    var_dump($chiave, $valore);
}

// $randomNumber = rand(1,20);
// while ( $randomNumber >= 5 ){
//     $randomNumber = rand(1, 20);
//     var_dump($randomNumber);
// }
