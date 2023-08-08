<?php
/*

1. Data una costante chiamata BUDGET di 1000 euro, scrivere un algoritmo che prenda in readline() una cifra espressa in euro.
    Gestire:
    - Che la cifra non sia superiore a 1000 euro;
    - In caso sia inferiore o uguale, dovrete dividere la cifra inserita in 3 RATE di pagamento e stampare in console un messaggio: “Paga in 3 comode rate da: $valore_calcolato Euro";
TIPS: Dopo la divisione vi uscirà un numero float con tutta la parte decimale, per gestirla e limitare a 2 le cifre dopo la virgola, potete utilizzare la built-in function round() in questo modo: round($valore_calcolato, 2);



const BUDGET = 1000;

$valore_utente = readline('Inserisci importo: ');

if ($valore_utente <= BUDGET) {
    $valore_calcolato = $valore_utente / 3;
    echo "Paga in 3 comode rate da: " . round($valore_calcolato, 2) . " " . "Euro" . "\n";
}

-------


2. Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array


$numeri = [10, 22, 33, 4, 55, 6, 7, 8, 9, 90, 67, 34];
$somma = 0;

for ($i=0; $i < count($numeri) ; $i++) { 
    
    if ($numeri[$i] % 2 == 0) {
        echo $numeri[$i] . "\n";
        $somma += $numeri[$i];
       
    }
    
}

$media = $somma / 7; 
var_dump($media);

--> se non conosco la lunghezza del mio array creo una variabile che comprende tutti i numeri pari uscenti dal ciclo e la divido per la sua lunghezza totale (?)

------

3. Dato un array contenente una serie di array associativi di utenti con nome e genere, per ogni utente stampare 

“Buongiorno Sig. Nome” o “Buongiorno Sig.ra Nome” o “Buongiorno Nome” a seconda del genere


$users = [
    [
        'name' => 'Marco',
        'gender' => 'M',
    ],
    [
        'name' => 'Vanessa',
        'gender' => 'F',
    ],
    [
        'name' => 'Jack',
        'gender' => 'M',
    ],
    [
        'name' => 'Mari*',
        'gender' => '',
    ],
];

foreach ($users as $user) {
    if ($user['gender'] == "M") {
        echo "Buongiorno Sig. " . $user['name'] . "\n" ;
    } else if ($user['gender'] == "F") {
        echo "Buongiorno Sig.ra " . $user['name'] . "\n" ;
    } else {
        echo "Buongiorno " . $user['name'];
    }
    
}

--------

4. Presi tutti i numeri da 1 a 10, scrivere un programma che calcoli la somma di tutti i numeri dispari tralasciando quelli pari;



$somma_dispari = 0;

for ($i=1; $i <= 10; $i++) { 
    if ($i % 2 == 1) {
        var_dump($i); //verifico i numeri dispari
        $somma_dispari += $i;
    }
}

var_dump($somma_dispari);

------

5. Scrivere un programma che stampi in console tutti i numeri da uno a cento.
    - Se il numero è multiplo di 3 stampare “PHP” al posto del numero;
    - se multiplo di 5 stampare “JAVASCRIPT”;
    - se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".


for ($i=1; $i <= 100 ; $i++) { 
    if ($i % 15 == 0) {
        echo "HACKADEMY" . "\n";
    } elseif ($i % 3 == 0) {
        echo "PHP" . "\n";
    } elseif ($i % 5 == 0) {
        echo "JAVASCRIPT" . "\n";
    } else {
        echo $i . "\n";
    }
    
}
*/