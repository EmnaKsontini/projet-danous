<?php
/**
 * Created by PhpStorm.
 * User: Rym
 * Date: 20-Apr-18
 * Time: 9:54 PM
 */
try {
    $bdd = new PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '0000');
}catch (PDOException $e){
    print "Erreur : " . $e->getMessage();
    die();
}
if(!empty($_POST["quantity"])) {
    $rep = $bdd->query("SELECT * FROM pc WHERE Reference='" . $_GET["code"] . "'");
    $productByCode = $rep -> fetch(PDO::FETCH_OBJ);
    $itemArray = array($productByCode->Reference=>array('Reference'=>$productByCode->Reference, 'categorie'=>$productByCode->Categorie));
//bich nista3mlouh fil page facturation nijbdou mil base de donnée bil référence


    if(!empty($_SESSION["comparator_item"])) {

        if(in_array($productByCode->Reference,array_keys($_SESSION["comparator_item"]))) {
            echo"<script>alert(\"existe déja dans le comparateur\");</script>";
        } else {
           $_SESSION["comparator_item"] = array_merge($_SESSION["comparator_item"],$itemArray);
        }
    } else {
        $_SESSION["comparator_item"] = $itemArray;

    }

}