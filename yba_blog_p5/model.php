<?php

require_once('database.php');

function getPosts()
{
    $db = getDb();
    $posts = $db->query('SELECT * FROM posts');
    return $posts;
}



function getPost($id)
{

    $db = getDb();
    $post = $db->prepare('SELECT * FROM posts WHERE id=?');
    $post->execute(array($id));
    if ($post->rowCount() == 1) {
        return $post->fetch();
    } else
        throw new Exception("Aucun identifiant ne correspond à l'id '$id'");
}


function getComments($id)
{
    $db = getDb();
    $comments = $db->prepare('SELECT * FROM comments WHERE posts_id = ?');
    $comments->execute(array($id));
    return $comments;
}
/*
function getUser($id){
    $db = getDb();
    $user = $db -> prepare('SELECT * FROM posts WHERE users_id = ?');
    $user->execute($id);
    return $user;
}
*/