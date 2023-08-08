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

    public function showCategory (){
        $this->category->getMyCategory();
    }

}


$newPost = new Post ('1518', new History, 'guerra');

var_dump($newPost);

$newPost->category->getMyCategory();

