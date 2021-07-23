<?php
require_once('database.php');
require ('classes/Post.php');



class PostManager {

private $db;



function getTitle($db){
    $title = $db->query('SELECT title FROM post');
}
}
