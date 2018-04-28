<?php
session_start();
$nom =$_POST['nom'];
$prenom =$_POST['prenom'];
$mail =$_POST['mail'];
$pays =$_POST['pays'];
$age =$_POST['age'];
try
{
    $BD_connexion=new PDO('mysql:host=localhost;dbname=danousdatabase','root','');

    $BD_connexion->query("use autho");
    $login=$_SESSION["login"];

    $req ="UPDATE `autho` SET nom=\"".$nom."\",prenom=\"".$prenom."\",mail=\"".$mail."\",pays=\"".$pays."\",age=\"".$age."\" WHERE login= \"".$login.'"';
    echo $req;
    $stmt = $BD_connexion->prepare($req);
    $stmt->execute();
    echo $stmt->rowCount();
    header('Location:profile.php');

}

catch(Exception $e) {}



?>