<?php

abstract class Category {

    abstract public function getMyCategory();
}


class News extends Category {
    public function getMyCategory(){
        echo "Il nome della categoria è News";
    }
}
class Sport extends Category {
    public function getMyCategory(){
        echo "Il nome della categoria è Sport";
    }
}
class Gossip extends Category {
    public function getMyCategory(){
        echo "Il nome della categoria è Gossip";
    }
}
class History extends Category {
    public function getMyCategory(){
        echo "Il nome della categoria è History";
    }
}

