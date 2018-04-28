<?php
/**
 * Created by PhpStorm.
 * User: Rym
 * Date: 17-Apr-18
 * Time: 10:06 PM
 */

try {
    $bdd = new PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '0000');
}catch (PDOException $e){
    print "Erreur : " . $e->getMessage();
    die();
}

if(!empty($_POST["quantity"])) {
    $rep = $bdd->query("SELECT * FROM ".$_POST["type"]." WHERE Reference='" . $_GET["code"] . "'");
    $productByCode = $rep -> fetch(PDO::FETCH_OBJ);
    $itemArray = array($productByCode->Reference=>array('prix'=>$productByCode->Prix, 'quantity'=>$_POST["quantity"]));
//bich nista3mlouh fil page facturation nijbdou mil base de donnée bil référence


        if(!empty($_SESSION["cart_item"])) {

            if(in_array($productByCode->Reference,array_keys($_SESSION["cart_item"]))) {
                foreach($_SESSION["cart_item"] as $k => $v) {
                    if($productByCode->Reference == $k) {
                        if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                            $_SESSION["cart_item"][$k]["quantity"] = 0;
                        }
                        if($_POST["quantity"]+$_SESSION["cart_item"][$k]["quantity"]>$productByCode->Stock){
                            echo"<script>alert(\"cette quantité n'est pas disponible dans le stock\");</script>";
                        }

                        else $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                    }
                }
            } else {
                if($_POST["quantity"]>$productByCode->Stock){
                    echo"<script>alert(\"cette quantité n'est pas disponible dans le stock\");</script>";
                }
                else $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
            }
        } else {
            if($_POST["quantity"]>$productByCode->Stock){
                echo"<script>alert(\"cette quantité n'est pas disponible dans le stock\");</script>";
            }
            else $_SESSION["cart_item"] = $itemArray;

        }

}
