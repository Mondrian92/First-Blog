<?php

require_once "booting.php";

$title=$_POST['title'];
$content=$_POST['content'];
$tag=$_POST['tag'];

$spaceLess=str_replace(" ", "", $tag);
$tagArray=explode(",", $spaceLess);

var_dump($tagArray);



    //if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['tag'])) 
    //{
$post= new Post($title, $content, $tagArray);
$newrepo->save($post);
    //}

    header('Location: ../index.php');

?>