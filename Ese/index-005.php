<?php

/*
Continuando l’esercizio della programmazione ad oggetti dell’Azienda di index-004, implementa:


STEP 5

Adesso abbiamo bisogno di stampare il totale assoluto di tutti gli stipendi.

Creare un attributo statico ( in alto nella classe, nella parte relativa agli attributi):

    //Attributi 
    public static $totale = 0;


Nel costruttore, di volta in volta, andrai a sommare tutti i totali di ogni singola azienda:

    self::$total += $costo_totale_azienda  

*/

class Company                   //ese 01-08-23 Selfworks 004
{

    public $name;
    public $site;
    public $employees;

    public function __construct($name, $site, $employees = 0)       //Step 1
    {
        $this->name = $name;
        $this->site = $site;
        $this->employees = $employees;
        //echo $this->description(); // è possibile richiamare la funzione all'interno del costruttore
        //$tot = $this->employees*(1500*12); 
        //echo "Il costo annuale dell'Ufficio " . $name . " è di " . $tot . "\n"; ---> Step 4, senza metodo ma direttamente nel costruttore
    }


    public function description() //Step 3
    {
        if ($this->employees) { //ritorna un valore true se diverso da 0, altrimenti se uguale a 0 esce dall'if 
            return "L'ufficio" . " " . $this->name . " con sede in " . $this->site . " ha ben " . $this->employees . " dipendenti" . "\n";
        }
        return "L'ufficio" . " " . $this->name . " con sede in " . $this->site . " non ha dipendenti" . "\n";
    }

    public function annualCost() { //Step 4.1 utilizzando metodo non nel costruttore ma richiamandolo di volta in volta
        $tot = $this->employees*(1500*12);
        
        if (!$tot) {
            return "L'azienda" . " " . $this->name . " non ha alcun costo" . "\n";
        }
        return "Il costo annuale dell'Ufficio " . $this->name . " è di " . $tot . " Euro" . "\n";
         
    }


}