<?php

class Continent {
    public $nameContinent;

    public function __construct($nameContinent) {
        $this->nameContinent = $nameContinent;
    }

}

class Country extends Continent {
    public $nameCountry;
    public function __construct($nameContinent, $nameCountry) {
        parent::__construct($nameContinent);
        $this->nameCountry = $nameCountry;
    }

}


class Region extends Country {
    public $nameRegion;
    public function __construct($nameContinent, $nameCountry, $nameRegion) {
        parent::__construct($nameContinent, $nameCountry);
        $this->nameRegion = $nameRegion;
    }

    
}

class Province extends Region{
    public $nameProvince;
    public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince) {
        parent::__construct($nameContinent, $nameCountry, $nameRegion);
        $this->nameProvince = $nameProvince;
    }

}

class City extends Province {
    public $nameCity;
    public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince,$nameCity) {
        parent::__construct($nameContinent, $nameCountry, $nameRegion, $nameProvince);
        $this->nameCity = $nameCity;
    }
}

class Street extends City {
    public $nameStreet;

    public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince,$nameCity,$nameStreet) {
        parent::__construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity);
        $this->nameStreet = $nameStreet;
    }

    public function getMyLocation () {
       echo "Mi trovo in " . $this->nameContinent . ", " . $this->nameCountry . ", " . $this->nameRegion . ", " . $this->nameProvince . ", " . $this->nameCity . ", " . $this->nameStreet . "\n";
    }

}

$myLocation = new Street ('Europa', 'Italia', 'Puglia', 'Ba', 'Monopoli', 'Via Roma');

$myLocation->getMyLocation();




