<?php


// Test de l'envoi du formulaire
if(!empty($_POST))
{
    // Les identifiants sont transmis ?
    if(!empty($_POST['login']) && !empty($_POST['password']))
    {
        // Sont-ils les mêmes que les constantes ?
        if($_POST['login'] !== "emna")
        {
            $errorMessage = 'Mauvais login !';
        }
        elseif($_POST['password'] !== "000")
        {
            $errorMessage = 'Mauvais password !';
        }
        else
        {
            // On ouvre la session
            session_start();
            // On enregistre le login en session
            $_SESSION['login'] ="emna";
            // On redirige vers le fichier admin.php
            header('Location:home.php');
            exit();
        }
    }
    else
    {
        $errorMessage = 'Veuillez inscrire vos identifiants svp !';
    }
} ?>