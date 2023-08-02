<?php

/*
Utilizzando il costrutto While (Pre-Condizionale), realizzare un sistema di "Aggiungi al carrello" in modo tale da eseguire delle operazioni di somma fino al raggiungimento del budget massimo inserito dall’utente appena eseguirete il programma:

//Ad Esempio

$budget = 10;// valore preso in input da readline
//Aggiungo articolo 1

$costo_articolo_1 = 5;// valore preso in input da readline

-----

$budget = $budget - costo_articolo_1;

//Budget Rimanente 5 Euro;

//....

Nel costrutto while, una volta definita la condizione, dovrete di volta in volta chiedere all’utente il costo dell’articolo e visualizzare a schermo il budget Rimanente.
Nel momento in cui il budget sarà 0 il programma terminerà l'esecuzione.

ATTENZIONE: Gestire l’eventualità in cui venga scritto un prezzo maggiore del budget a disposizione;
Il Budget rimanente non potrà mai assumere un valore negativo;

*/


$budget_utente = readline('Inserisci il tuo budget: ');
$costo_articolo = readline('Inserisci il costo dell articolo: ');

while ($budget_utente >= $costo_articolo) {
    
    if ($budget_utente > $costo_articolo) {
        $budget_utente -= $costo_articolo;
        echo "il tuo saldo adesso è: " . $budget_utente . " Euro" . "\n";
        $costo_articolo = readline('costo articolo: ');
    } elseif ($budget_utente == $costo_articolo){
        $budget_utente -= $costo_articolo;
        echo "Il tuo saldo adesso è zero e non puoi più acquistare";
        die();
    }
    

}

if ($budget_utente < $costo_articolo){
    echo "non hai soldi a sufficienza";
}

