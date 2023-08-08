<?php
/* Esercizi commentati 

Selfworks 001 

2. Variabili
definire 5 variabili di tipo:
    1. Intero
    2. Float
    3. String
    4. Boolean
    5. NULL
    E attraverso il comando visto a lezione gettype() verificare mediante un var_dump() il tipo correttamente assegnato.


$numero_intero = 5; //variabile di tipo primitivo (predefinita o scalare) "integer" --> intero
//echo gettype($numero_intero);
//var_dump($numero_intero);

$var_float = 3.2;
echo gettype($var_float);
var_dump($var_float);//variabile di tipo primitivo (predefinita o scalare) "float" --> decimale

$stringa = "Ciao"; //variabile di tipo primitivo (predefinita o scalare) "String" --> Stringa
echo gettype($stringa);
var_dump($stringa);

$booleana = true; // o false //variabile di tipo primitivo (predefinita o scalare) "Boolean" --> Booleano
echo gettype($stato);
var_dump($stato);

$nulla= null; //variabile di tipo primitivo (predefinita o scalare) "null" --> Nulla
echo gettype($nulla);
var_dump($nulla);

3. Costanti

Proseguendo con l’esercizio 2,  trasformare le variabili appena create in costanti e richiamarle nella maniera corretta.
Come si definisce una costante?



const EURO_IN_LIRE = 1936.27;// La costante si scrive senza $ e tutto maiuscolo
    
echo EURO_IN_LIRE;

const NUMERO_INTERO = 5;
const VAR_FLOAT = 3.2;
const STRINGA = "Ciao";
const BOOLEANA = true;
const NULLA = null;

var_dump(NUMERO_INTERO, VAR_FLOAT, STRINGA, BOOLEANA, NULLA);


4. Concatenare le stringhe

Correggere eventuali errori di dichiarazione e stampare in un echo la stringa: Marco hai sete? Perchè hai bevuto tutto

$1text = "Marco"; //non è possibile dichiarare una variabile iniziando con un numero
$text2 = "hai"; 
$text.3 = "sete"; //non è possibile inserire un carattere come il punto, è ammesso solo l'underscore
$text4 = "?";
@text5 = "Perchè";
$te-xt6 = '$text2'; //non è possibile inserire un carattere come il punto, è ammesso solo l'underscore
$text 7 = 'bevuto';
$text8 = "tutto". //una volta dichiarata è necessario inserire il punto e virgola altrimenti è errore (no punto ma ;)


$text = "Marco"; 
$text2 = "hai"; 
$text3 = "sete"; 
$text4 = "?";
$text5 = "Perchè";
$text6 = '$text2';
$text7 = 'bevuto';
$text8 = "tutto";

echo $text . " " . $text2 . " " . $text3 . $text4 . " " . $text5 . " " . $text2 .  " " . $text7 . " " . $text8;


5. Dati i seguenti ARRAY:


    $words1 = [
      'una',
      67,
      'vita',
      'colle',
      'mi',
      'rosso',
      [
        'oscura',
        'era',
        89,        
        [
          'mezzo',
          [
            'cammin',
            'Nel',
            [
              'selva',
              'la',
              [
                'via',
                'una',
                true,
              ]
            ],
          ]
        ],
        'ritrovai',
        'per'
      ],
    'diritta'
    ];
    
    $words2 = [
      'elemento1' => 25.89,
      'elemento2' => 'nostra', 
       'elemento3' => [
          'Virgilio',
          'smarrita',
          'ché'
        ]
    ];
    
    $results =  ""; //<--- Tutto in questa variabile
    echo $result

Creare una variabile di tipo Stringa chiamata $results che stampi sul terminale il testo (rispettando spazi e punteggiature) di questi due array. 
Ricordando l’accesso agli array con indici e chiavi visti a lezione, ricostruire questa frase:

Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita.

ATTENZIONE: Nell’array potreste trovare degli intrusi o non trovare alcune preposizioni. Approcciate il problema nel modo che ritenute più opportuno: nuove variabili, concatenamenti, apice singolo, doppio apice ecc..


$words1 = [ //array multidimensionale
    'una',      //--> indice 0 [0]
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [               // tutto il sotto-array rappresenta l'indice 6 [6]
      'oscura',     // [6] ---- oscura riparte con indice[0]    
      'era',
      89,        
      [             
        'mezzo',    // tutto il sotto-array rappresenta l'indice [3], "mezzo" riparte con indice [0] ecc.. ecc...
        [
          'cammin',
          'Nel',
          [
            'selva',
            'la',
            [
              'via',
              'una',
              true,
            ]
          ],
        ]
      ],
      'ritrovai',
      'per'
    ],
  'diritta'
  ];
  
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra', 
    'elemento3' => ['Virgilio','smarrita','ché']
  ];
  


$result = $words1[6][3][1][1] . " " . $words1[6][3][0] . " " . "del " . $words1[6][3][1][0] . " " . "di " . $words2['elemento2'] . " " . "ecc ecc.. " . $words2['elemento3'][1]; //inserire la chiave tra parentesi e apici ed a seguire l'indice del valore che ci serve)
echo $result;



7. Operazioni tra  Numeri interi e float
Utilizzando gli operatori matematici dell’immagine (VEDI SLIDE) , realizzare una stampa in echo del blocco di variabili specificate:



$x = 10;
$y = 18;
$z = 56.0;
$t = 0.8;
    
// Blocco da eseguire
$somma = $x + $y;
$sottrazione = $z - $y;
$divisone = $x / $t;
$moltiplicazione = $x * $t;
$media = ($x + $y + $z + $t) / 4;

*/
