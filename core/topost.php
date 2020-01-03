<?php

require_once "booting.php";

$spaceLess=str_replace(" ", "", $_POST['tag']);
$tagArray=explode(",", $spaceLess);

$post= new Post($_POST['title'], $_POST['content'], $tagArray);
$newrepo->save($post);

header('Location: ../index.php');

?>