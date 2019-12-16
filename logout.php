<?php 
    include "core/loginhandler.php";
    
    logoutUser();
    header("location: index.php");
?>