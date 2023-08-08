<?php

/*


1. Utilizzando un approccio funzionale (piccole funzioni che risolvono un piccolo problema),  riscrivere il programma fatto in precedenza che stampi in console tutti i numeri da 1 a 100. 
    - Se il numero e’ multiplo di 3 deve stampare  “PHP”;
    - Se multiplo di 5 deve stampare “JAVASCRIPT”; 
    - Se multiplo di 3 e 5 (15) deve stampare “HACKADEMY”;

    
    ---esercizio precedente---

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

function x5($integer)
{
    if ($integer % 5 == 0) {
        return true;
    }
    return false;
}

function x3($integer)
{
    if ($integer % 3 == 0) {
        return true;
    }
    return false;
}

//sostituisco la stringa con i multipli per verificare che funzioni e successivamente posso sostituire le stringhe con PHP, JS e HACHADEMY
function stampaMultipli($integer)
{
    for ($i = 1; $i <= $integer; $i++) {
        if (x3($i) && x5($i)) {                             //sfrutto entrambe le funzioni utilizzando gli op.logici
            echo $i . " è multiplo di 3 e di 5" . "\n";
        } elseif (x3($i)) {
            echo $i . " è multiplo di 3" . "\n";
        } elseif (x5($i)) {
            echo $i . " è multiplo di 5" . "\n";
        } else {
            echo $i . "\n";
        }
    }
}

stampaMultipli(30); //o 100 come traccia
