<?php
    require_once 'booting.php';

    $title=$_GET['title'];
    $newrepo->remove($title);

    header('Location: ../index.php');

?>