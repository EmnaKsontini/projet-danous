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

    $rep = $bdd->query("SELECT * FROM pc WHERE Reference='" . $_GET["code"] . "'");
    $productByCode = $rep -> fetchAll(PDO::FETCH_OBJ);
    $itemArray = array($productByCode[0]["Reference"]=>array('Categorie'=>$productByCode[0]["Categorie"], 'Reference'=>$productByCode[0]["Reference"], 'quantity'=>$_POST["quantity"], 'Prix'=>$productByCode[0]["Prix"]));

    if(!empty($_SESSION["cart_item"])) {

        if(in_array($productByCode[0]["Reference"],array_keys($_SESSION["cart_item"]))) {
            foreach($_SESSION["cart_item"] as $k => $v) {
                if($productByCode[0]["code"] == $k) {
                    if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                        $_SESSION["cart_item"][$k]["quantity"] = 0;
                    }
                    $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                }
            }
        } else {
            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
        }
    } else {
        $_SESSION["cart_item"] = $itemArray;
    }

}
