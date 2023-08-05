<?php
require_once('class.php');

class Post {
    public $title;
    public $category;
    public $tag;

    public function __construct($title, Category $category, $tag) {
        $this->title=$title;
        $this->category=$category;
        $this->tag=$tag;

    }

}


$newPost = new Post ('1518', new History, 'guerra');

var_dump($newPost);

