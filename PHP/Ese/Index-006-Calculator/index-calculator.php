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

class Rettagolo
{

  use Calculator;

  public $altezza;
  public $base;

  public function __construct($altezza, $base)
  {


    $this->altezza = $altezza;
    $this->base = $base;
  }

  public function getArea()
  {
    echo $this->mul($this->altezza, $this->base);
  }
  public function getPerimetro()
  {
    echo $this->sum($this->altezza, $this->base) + $this->sum($this->altezza, $this->base);
  }

  public function getDiagonale()
  {
    echo $this->sqr($this->sum($this->mul($this->altezza,$this->altezza),$this->mul($this->base, $this->base)));
  }
}


$rettangolo1= new Rettagolo (5,4);
//$rettangolo1->getArea();
//$rettangolo1->getPerimetro();
//$rettangolo1->getDiagonale();