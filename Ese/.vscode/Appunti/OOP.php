<?php

class Person {
    public $name; //attributi (variabili) ---> le variabili (ma anche le funzioni) con lo stesso nome ma riferite ad oggetti diversi non creano conflitti
    public static $count = 0; //--> attributo statico, non dinamico (static)--fa parte soltanto della classe
    public function saluta(){ //Metodi (funzioni)     ---> differenza: funzioni come miniprogrammi richiamati da tutti, metodi richiamati solo dall'oggetto
        echo "Ciao " . $this->name;
    }
    
    public function __construct($name) {    //Costruttore ---> specie di inizializzatore, eseguito sempre per primo, all'interno inserisco dei parametri per istanziare successivamente l'oggetto
        $this->name = $name; //this super variabile
        self::$count++; //self richiama se stesso,:: stanno per alias --> si utilizza per evitare di riscrivere di volta in volta il codice nel caso in cui dovesse cambiare il nome della classe. Per accedere al count io non posso più utilizzare l'oggetto ma la classe. 
    }    
}

// class Animal {
//     public $name;

// }


$persona1 = new Person ('Marco'); //istanzio l'oggetto
//var_dump($persona1); --> verifico

// $persona1->saluta(); richiamo il metodo dell'oggetto


//per richiamare la classe
echo Person::$count; //risultato = 1 perchè istanziato un solo oggetto ovvero $persona1
