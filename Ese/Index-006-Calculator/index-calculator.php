<?php
require_once('trait.php');
/*
Crea un Trait "Calculator" definendo queste semplici  operazioni tra numeri. 

Ricorda che i Trait sono "Universali" e non necessitano di essere istanziati.

    trait Calculator {
      public function sum($a, $b) {
        return $a + $b;
      }
      public function sub($a, $b) {
        return $a - $b;
      }
      public function mul($a, $b) {
        return $a * $b;
      }
      public function div($a, $b) {
        return $a / $b;
      }  
      public function sqr($a){
       return sqrt($a);
      }
    }

Successivamente, crea 1 classe Rettangolo con gli attributi in input:

- Base (b);
- Altezza (h);

Il vostro compito sarà quello di creare 3 metodi (pubblici, protetti, statici vedete voi) che andranno a calcolare:

- Area => b*h
- Perimetro => 2b + 2h
- Diagonale =>  √ hˆ2 + bˆ2  (Tutto sotto radice).

Tutte le operazioni che andrete a fare dovranno essere richiamate dal trait sopra definito.
*/

class Rettagolo {

    use Calculator;
    public $b;
    public $a;

    public function __construct($b, $a) {

        $this->b=$b;
        $this->a=$a;
    }

    public function getArea ($b,$a) {
       
    }
    public function getPerimetro ($b,$a) {
        
    }

    public function getDiagonale($a,$b){
        
    }
     

}

// - Area => b*h
// - Perimetro => 2b + 2h
// - Diagonale =>  √ hˆ2 + bˆ2  (Tutto sotto radice).

//$area = new Rettagolo(5,2);

//$area->getArea(5,2);
//$area->getPerimetro(5,2);
//$area->getDiagonale(5,2);