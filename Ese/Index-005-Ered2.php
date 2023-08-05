<?php


class Vertebrates
{
    public function __construct()
    {
       echo "sono un animale vertebrato!\n";
    }

}


class ColdBlooded extends Vertebrates
{   
    
   
    public function __construct()
    {
        parent::__construct();
    }
    protected function coldBlodeed()
    {
       
        echo "Sono un animale a sangue freddo!\n";
    }
}

class Fish extends ColdBlooded
{

    public function __construct()
    {
        parent::__construct();
        $this->coldBlodeed();
        echo "Sono un pesce!\n";
    }

}

class Reptiles extends ColdBlooded
{

    public function __construct()
    {
        parent::__construct();
        $this->coldBlodeed();
        echo "Sono un Serpente!\n";
    }

}

class Amphibians extends ColdBlooded
{

    public function __construct()
    {
        parent::__construct();
        $this->coldBlodeed();
        echo "Sono una Rana!\n";
    }

}

//$magikarp = new Fish();
//$snake = new Reptiles();
$frog = new Amphibians();
