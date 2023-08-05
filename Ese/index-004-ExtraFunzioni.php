<?php

/*
Scrivere un programma utilizzando le funzioni che, data una stringa in input dal readline, conti quante vocali sono state inserite
 ---
 TIPS1: Ricordatevi di risolvere il codice PRIMA in maniera sequenziale e solo DOPO, applicando le 3 regole (Estrazione, Incapsulamento e Astrazione) suddividere il codice in piccole procedure:

TIPS2: Lo pseudocodice da trasformare in codice è il seguente:

- Definisco una variabile contatore a 0 (per sommare le vocali di volta in volta);
- Leggo la parola in input da terminale;
- Inserisco la parola appena inserita in un ciclo,  devo controllare ogni lettera singolarmente;
    - Faccio contatore + 1 se la lettere in questione è uguale a: a OPPURE e OPPURE i OPPURE o OPPURE u;
    - Altrimenti non faccio nulla;
- Infine stampo una echo con la variabile contatore finale.
---

STEP 1 -- RISOLUZIONE SEQUENZIALE

$parola = readline('Inserisci la parola: ');
$contatore_vocali = 0;

for ($i=0; $i < strlen($parola); $i++) { 
    
    if ($parola[$i] == 'a' || $parola[$i] == 'e'|| $parola[$i] == 'i'|| $parola[$i] == 'o'|| $parola[$i] == 'u' ) {
        
        $contatore_vocali += 1;
        
       
    }
   
} 

echo "nella parola " .  $parola . " ci sono " . $contatore_vocali . " vocali";

STEP 2 -- ESTRAZIONE, INCAPSULAMENTO, ASTRAZIONE
*/





function countA ($string) {
    if ($string == "a") {
        return true;
    }
    return false;
}


function countE ($string) {
    if ($string == "e") {
        return true;
    }
    return false;
}

function countI ($string) {
    if ($string == "i") {
        return true;
    }
    return false;
}


function countO ($string) {
    if ($string == "o") {
        return true;
    }
    return false;
}
function countU ($string) {
    if ($string == "u") {
        return true;
    }
    return false;
}


function countVocal($string) {
    $contatore_vocali = 0;

    for ($i=0; $i < strlen($string) ; $i++) { 
        if ((countA($string[$i]) == "a")||(countE($string[$i]) == "e")||(countI($string[$i]) == "i")||(countO($string[$i]) == "o")||(countU($string[$i]) == "u")) {
            $contatore_vocali+=1;
        } 
    } echo $contatore_vocali;
    
}

countVocal("aiuole");