<?php

    include "booting.php";

    const USER_EMAIL = 'pippo@pippo.it';
    const USER_PASSWORD = '$2y$12$X8oiIDcFef1UdBpSxEZhJO.tO05Ts7BZnMY6Ehsd8EjMTN9O5Z8XW'; //admin
    
    function loginUser($email, $password)
    {
        if ($email === USER_EMAIL) {
            if (password_verify($password, USER_PASSWORD)) 
            {
                $_SESSION['loggedUser'] = 
                [
                    'name' => 'Pippo',
                    'email' => $email,
                ];
                return true;
            }
        }
        return false;
    }

    function isLogged()
    {
        return isset($_SESSION['loggedUser']);
    }

    function logoutUser()
    {
     unset($_SESSION['loggedUser']);
    }
?>