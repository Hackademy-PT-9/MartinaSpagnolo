<?php


class Vertebrates {
    
    public function __construct(){

    }

    protected function typeVertebrates() {
        echo "sono un animale Vertebrato ";
    }
   

}


class Cold_Blooded  extends Vertebrates{
    
    public function __construct(){
        parent::__construct();
        $this->typeVertebrates();
    }

    protected function typeColdBlooded() {
       
        echo "sono un animale a sangue freddo!";
    }

}

class Reptiles extends Cold_Blooded {
    
    public function __construct(){
        parent::__construct();
        $this->typeColdBlooded();
    }

    protected function typeReptiles() {
       
        echo "sono un Rettile";
    }


}

class Amphibians extends Cold_Blooded {
    public function __construct(){
        parent::__construct();
        $this->typeColdBlooded();
    }
    protected function typeAmphibians() {
       
        echo "sono un Anfibio!";
    }

}

class Fish extends Cold_Blooded {
    
    public function __construct(){
        parent::__construct();
        $this->typeColdBlooded();
    }

    protected function typeFish() {
       
        echo "sono un Pesce!";
    }



}

class Warm_Blooded extends Vertebrates{
    
}


class Mammals {
    
}

class Birds {
    
}

$magikarp = new Fish (); //non passa la funzione
