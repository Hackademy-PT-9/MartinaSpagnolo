<?php
/*
Robot
1. Parte superiore ---> astratta
1.1 Saluta --> figlio


2. Parte inferiore ---> astratta
2.1 Cammina --> figlio
2.2 Corri --> figlio
2.3 Calcia --> figlio
*/

abstract class ParteSup {
    abstract public function muoviMani();
}

class Saluta extends ParteSup {
    public function muoviMani() {
        echo "Salutiamo!\n";
    }

}



abstract class ParteInf {
    abstract public function muoviPiedi();
}

class Cammina extends ParteInf {
    public function muoviPiedi() {
        echo "Facciamo una passeggiata\n";
    }
}

class Corri extends ParteInf {
    public function muoviPiedi() {
        echo "Corriamo!\n";
    }
}

class Calcia extends ParteInf {
    public function muoviPiedi() {
        echo "Tiro un calcio\n";
    }
}


