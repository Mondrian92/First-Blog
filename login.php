<?php
    
    include "view/login.php";

    if(isset($_POST['email']))
    {
        if($_POST['email'] && $_POST['password']) 
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            if(loginUser($email, $password))
            {
                header("location: index.php");
            }
        }
    }
?>