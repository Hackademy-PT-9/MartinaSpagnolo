<?php
require_once('class.php');


class Robot {
    public $mani;
    public $piedi;
    public $piedi2;

    public $piedi3;

    public function __construct(ParteSup $mani, ParteInf $piedi, ParteInf $piedi2, ParteInf $piedi3){ //obj injec
        $this->mani=$mani;
        $this->piedi=$piedi;
        $this->piedi2=$piedi2;
        $this->piedi3=$piedi3;

    }

    public function azione() {
        
        $this->mani->muoviMani();
        $this->piedi->muoviPiedi();
        $this->piedi2->muoviPiedi();
        $this->piedi3->muoviPiedi();


    }

}


$mani = new Saluta(); //classe figlio
$piedi = new Cammina(); //classe figlio
$piedi2 = new Corri();  //classe figlio
$piedi3 = new Calcia(); //classe figlio

$robot= new Robot ($mani, $piedi, $piedi2, $piedi3); //obj composition

$mani->muoviMani();
$piedi->muoviPiedi();
$piedi2->muoviPiedi();
$piedi3->muoviPiedi();

