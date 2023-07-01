<?php

//Esercizio 1

$users = [
        [
            "name" => "Lorenzo",
            "surname" => "Cennamo",
            "gender" => "M",
            
        ],
        [
            "name" => "Francesca",
            "surname" => "Mercurio",
            "gender" => "F",
            
        ],
        [
            "name" => "Flavio",
            "surname" => "D'Ambrosio",
            "gender" => "M",
            
        ],
        [
            "name" => "Andrea",
            "surname" => "Esposito",
            "gender" => "NB"
        ]
];

foreach ($users as $user) {
    if($user["gender"] == "M"){
        echo "Buogiorno Sig. $user[name] $user[surname] \n";
    } else if($user["gender"] == "F") {
        echo "Buongiorno Sig.ra $user[name] $user[surname] \n";
    } else {
        echo "Buongiorno $user[name] $user[surname] \n";
    }
};


//Esercizio 2

$numbers = [1, 7, 10, 11, 26, 33, 58, 70];

$sum = 0;
$count = 0;

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $sum += $number;
        $count++;
    }
};

if ($count > 0) {
    $result = $sum / $count;
    echo "La media dei numeri pari è: " . $result;
}


//Esercizio 3 


$number = 100;

for ($i = 1; $i <= $number; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "Questo non è un numero ma è: HACKADEMY \n";
    } else if ($i % 3 == 0) {
        echo "Questo non è un numero ma è: PHP \n";
    } else if ($i % 5 == 0) {
        echo "Questo non è un numero ma è: JAVASCRIPT \n";
    } else {
        echo "Questo è il numero $i \n";
    }
}


//Esercizio Bonus 

$voto = 30;

if ($voto < 18) {
    echo "insufficiente, il tuo voto è: $voto";
} else if ($voto >= 18 && $voto < 21) {
    echo "sufficiente, il tuo voto è: $voto";
} else if ($voto >= 21 && $voto < 24) {
    echo "buono, il tuo voto è: $voto";
} else if ($voto >= 24 && $voto < 27) {
    echo "distinto, il tuo voto è: $voto";
} else if ($voto >= 27 && $voto <= 29) {
    echo "ottimo, il tuo voto è: $voto";
} else {
    echo "eccellente, il tuo voto è: $voto";
}