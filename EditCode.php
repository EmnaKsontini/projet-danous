<?php

$nom =$_POST['nom'];
$prenom =$_POST['prenom'];
$mail =$_POST['mail'];
$pays =$_POST['pays'];
$age =$_POST['age'];
try
{
    $BD_connexion=new PDO('mysql:host=localhost;dbname=danousdatabase','root','');

    $BD_connexion->query("use autho");

    $req = $BD_connexion->prepare("UPDATE `autho` SET nom='val1',prenom='val2',mail='val3',pays='val4',age='val5' WHERE `login`='meriem'");
    $req->execute(array(
        'val1'=>$nom,
        'val2'=>$prenom,
        'val3'=>$mail,
        'val4'=>$pays,
        'val5'=>$age,

    ));


}
catch(Exception $e)
{}



?>