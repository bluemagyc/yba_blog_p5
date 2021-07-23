<?php

function getDb(){
$db = new PDO('mysql:host=localhost;dbname=blog_p5', 'root', '',
 array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
return $db;
}