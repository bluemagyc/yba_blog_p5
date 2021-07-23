<?php


class Post{


    private $id;
    private $title;
    private $content;
    private $author;
    private $date;


    //setters

    function setId($id){
       if (isset($id)){
        $this->id = $id;}
    }

    function setTitle($title){
        if (is_string($title)){
         $this->id = $title;}
     }

     function setAuthor($author){
        if (is_string($author)){
         $this->id = $author;}
     }


     //getters

     function id()
{
    return $this->id;
}

function title(){
    return $this->title;
}

}