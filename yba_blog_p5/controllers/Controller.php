<?php


require('model.php');

function home(){
    $posts = getPosts();
    require 'views/postView.php';
}

function post($id){
$post = getPost($id);
$comments = getComments($id);
require 'views/singlePostView.php';
}

function error($errorMsg){
    require 'views/errorView.php';
}