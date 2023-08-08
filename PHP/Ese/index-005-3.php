<?php
/*

Dato questo codice:

    class Car { 
      private $num_telaio; 
    }
    
    class Fiat extends Car {
     protected $license;
     protected $color; 
      
    }

Completare la classe Fiat con le strutture mancanti e, utilizzando il livello di severità che ritenete più opportuno, estendere i metodi per stampare a video in un echo:
`"La mia macchina è Opel con targa AGHTYU e numero di Telaio "`

Per sapere se l’esercizio è corretto, stampare in console il var_dump dell’oggetto:

    var_dump($car); 

L’output dovrà avere solamente 3 attributi:


     object(MyCar)#1 (3) { 
      ["num_telaio":"Car":private]=>
      string(6) "183784"
      ["nome":protected]=>
      string(4) "Opel"
      ["targa":protected]=>
      string(8) "19384785"
    }

E non 4! Dobbiamo modificare l’attributo privato, non crearne uno nuovo.


     object(MyCar)#1 (4) { 
      ["num_telaio":"Car":private]=>
      NULL
      ["nome":protected]=>
      string(4) "Opel"
      ["targa":protected]=>
      string(8) "19384785"
      ["num_telaio":protected]=>
      string(6) "183784"
    }
*/



class Car
{
    private $num_telaio = 183784;

    protected function getTelaio() {
        return $this->num_telaio;
    }

}

class Fiat extends Car
{
    protected $nome;
    protected $license;
    protected $color;
    protected $targa;

    public function __construct($nome, $targa, $color,$license){
        $this->nome=$nome;
        $this->targa=$targa;
        $this->getTelaio();
        $this->color=$color;
        $this->license=$license;
    }

    public function myCar() {
        echo "la mia macchina è " . $this->nome . " con targa " . $this->targa . " e numero di Telaio " . $this->getTelaio(); 
    }
}

$my= new Fiat ('Opel', 'AGHTYU', 'red', 'a457');
//var_dump($my);

$my->myCar();


