<?php

/*
Creare una classe Azienda (Company) che abbia gli attributi public:

- Nome: Nome della sede;
- Sede: Stato in cui è ubicata la sede;
- Totale Dipendenti (default=0): Numero di dipendenti assunti in quella sede.

Definire la funzione __construct() come visto a lezione per prendere in input i 3 attributi.

*/

class Company
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

//Step 2
$company1 = new Company('Apple', 'USA', 3);
$company2 = new Company('Barilla', 'ITA'); //senza 0 segna errore
$company3 = new Company('Nintendo', 'JAP', 5);
$company4 = new Company('Nokia', 'FIN', 10);
$company5 = new Company('Xioami', 'CHI', 3);

//var_dump($company1, $company2, $company3, $company4, $company5); ---> OK!

// echo $company1->description(); ...non necessario se funzione richiamata nel costruttore
// echo $company2->description();
// echo $company3->description();
// echo $company4->description();
// echo $company5->description();

// echo $company1->annualCost();
// echo $company2->annualCost();
// echo $company3->annualCost();
// echo $company4->annualCost();
// echo $company5->annualCost();
