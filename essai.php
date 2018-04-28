<?php
/**
 * Created by PhpStorm.
 * User: Rym
 * Date: 17-Apr-18
 * Time: 11:55 PM
 */
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '0000');
}catch (PDOException $e){
    print "Erreur : " . $e->getMessage();
    die();
}
$req = "SELECT * FROM pc";
$query = $bdd -> query($req);
$pcs = $query -> fetch(PDO::FETCH_OBJ);
if (isset($_POST["addtocart"])) {
    echo "hello";
    $rep = $bdd->query("SELECT * FROM pc WHERE Reference='" . $_GET["code"] . "'");
    $productByCode = $rep -> fetch(PDO::FETCH_OBJ);
    var_dump($productByCode);
}
if (isset($_SESSION["cart_item"])){

}
echo"<form method=\"post\" action=\"essai.php?action=add&code=$pcs->Reference\">
                                 <div>
                                     <input type=\"text\" name=\"quantity\" value=\"1\" size=\"2\" />
                                     <input type=\"submit\" name=\"addtocart\" value=\"Add to cart\" />
                                     <input type=\"submit\" value=\"Details\" />
                                 </div>
                             </form>";