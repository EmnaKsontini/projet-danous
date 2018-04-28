<?php session_start();?>

<!DOCTYPE html>
<?php

//echo $_POST["type"] ;
// echo "hello".$_SESSION["login"];  //emna: ena zedt star heda bch njareb session
if(isset($_POST["addtocart"])){
    include "cart.php";
    //var_dump( $_SESSION["cart_item"]);//tester si les produits ajouter au chariot sont sauvegarder

}
if(isset($_POST["addtocomparator"])){
    include "comparator.php";
    //var_dump( $_SESSION["comparator_item"]);

}
if($_POST["type"]=="laptop")
{
    $_SESSION["table"]="pc";//lezim ism i table ikoun howa bidou ism l catégorie!!!! bich tkoun dynamique
}
if($_POST["type"]=="phone")
{
    $_SESSION["table"]="telephone";//lezim ism i table ikoun howa bidou ism l catégorie!!!! bich tkoun dynamique

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css" type="text/css" media="screen">






    <script type="text/javascript" src="js/html5.js"></script>
    <title>Products</title>
</head>

<body>
<header>
    <nav >
        <ul>
            <li class="selected"><a href="home.php">Home</a></li>
            <li><a href="#">Specials</a></li>
            <li><a href="MyCart.php">MyCart</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">About</a></li>
            <li><a href="formulaireLogin.php"> <img src="images/this2.png" title="LogIn" ></a></li>



        </ul>
        <section id="search"><!-- Search form -->
            <form action="#" onsubmit="return false;" method="get">
                <input type="text" onfocus="if (this.value =='Search..' ) this.value=''" onblur="if (this.value=='') this.value='Search..'" value="Search.." name="q">
                <input type="submit" value="Search">
            </form>

        </section>
    </nav>

    <!--<div class="top_head">
        <div class="couverture ">
            notre couverture est en background
        </div>
    </div>!-->
    <section id="cat">
        <nav id="submenu">
            <ul>
                <form method="post" action="products.php">
                    <li><input name="type" type="submit" value="laptop" /></li>
                    <li><input name="type" type="submit" value="phone" /></li>
                    <li><input name="type" type="submit" value="Category 3" /></li>
                    <li><input name="type" type="submit" value="Category 4" /></li>
                    <li><input name="type" type="submit" value="Category 5" /></li>
                    <li><input name="type" type="submit" value="Category 6" /></li>
                </form>
            </ul>
    </section>
</header>
<article>
    <section id="content">
        <div id="left">
            <h3>LAPTOP</h3>
            <ul>
                <?php
                // cette fonction permet d eliminer les attributs qu on va pas utiliser dans le filtre--
                function verifierFiltre ($s){
                    return (strcmp($s,"Reference")!=0 &&strcmp($s,"Grantie")!=0 && strcmp($s,"Connecteurs")!=0 && strcmp($s,"stock")!=0 &&strcmp($s,"Garantie")!=0 &&strcmp($s,"Dimension")!=0  );
                }
                //cette fonction permet de corriger la requete lorsque on utilise le caractere spécialte " -> \"
                function verif_carct_sep ($s){
                    $ret=str_replace("\"","\\\"",$s);
                    return $ret;
                }
                try {
                    $bdd = new PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '0000');
                }catch (PDOException $e){
                    print "Erreur : " . $e->getMessage();
                    die();
                }
                //inkemlou l condition lil les catégories l kol
                if($_POST["type"]=="laptop")
                {     echo "flag";
                    $_SESSION["table"]="pc";//lezim ism i table ikoun howa bidou ism l catégorie!!!! bich tkoun dynamique
                }
                if($_POST["type"]=="phone")
                {
                    $_SESSION["table"]="telephone";//lezim ism i table ikoun howa bidou ism l catégorie!!!! bich tkoun dynamique
                    
                }

                $req = $bdd ->query("use danousdatabase");
                $req = "SELECT * FROM ".$_SESSION["table"];
                $query = $bdd -> query($req);
                $pcs = $query -> fetchAll(PDO::FETCH_OBJ);
                foreach ($pcs as $p){
                    ?>
                    <li>
                        <div class="img">
                            <a href="#">
                                <img src="images/<?php echo"$p->Reference"?>.jpg" alt="<?php echo "$p->Reference" ?>" style="width:128px;height:128px">
                            </a>
                            <form method="post" action="product.php?code=<?php echo $p->Reference; ?>">
                                <div>
                                    <input id="Details" type="submit" value="Details" />
                                    <input type="hidden" name="type" value="<?php echo $p->type; ?>" />
                                </div>
                            </form>
                        </div>
                        <div class="info">
                            <a class="title" href="#"><?php echo"$p->Reference"?></a>
                            <p>on va ecire une description ici1</p>
                            <div class="price">
                                <span class="st">Our price:</span><strong><?php echo "$p->Prix"."DT" ?></strong>
                            </div>
                            <div class="actions">
                                <form method="post" action="products.php?code=<?php echo $p->Reference; ?> ">
                                    <div>
                                        <input type="submit" name="addtocomparator" value="Add to comparator" />
                                        <input type="submit" name="addtocart" value="Add to cart" />
                                        <input type="text" id="q" name="quantity" value="1" size="1" />
                                        <input type="hidden" name="type" value="<?php echo $p->type; ?>" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <?php
                };?>
            </ul>
        </div>
        <div id="right">
            <h3>Filtre</h3>
            <ul>
                <li>
                    <div class="info">
                        <?php
                        $req = "DESCRIBE ".$_SESSION["table"];
                        $query = $bdd -> query($req);
                        $tab = $query -> fetchAll(PDO::FETCH_OBJ);
                        foreach ($tab as $a) {
                            if (verifierFiltre($a->Field)){
                                echo ("<h4>".$a->Field."</h4>");
                                if ($a->Field=="Prix"){

                                    $req_min = "SELECT MIN(Prix) FROM " . $_SESSION["table"] ;
                                    $query_min= $bdd->query($req_min);
                                    $min = $query_min->fetch();
                                    //echo (int)$min[0];
                                    $req_max = "SELECT MAX(Prix) FROM " . $_SESSION["table"] ;
                                    $query_max = $bdd->query($req_max);
                                    $max = $query_max->fetch();
                                    ?>
                                    <input type="range" id="scroll" <?php echo "max=\"".$max[0]."\" min =\"".$min[0]."\" value=\"".$max[0]."\">"?>
                                    <div id="prixVal"><?php echo $max[0] ?></div>
                                <?php


                                }else {
                                    $req_dist_element = "SELECT DISTINCT `" . $a->Field . "` FROM " . $_SESSION["table"];
                                    $query_dist_element = $bdd->query($req_dist_element);
                                    try {
                                        $values = $query_dist_element->fetchAll(PDO::FETCH_OBJ);
                                    } catch (Exception $e) {
                                        echo 'Exception reçue : ', $e->getMessage(), "\n";
                                    }
                                    echo "<form>";
                                    foreach ($values as $val) {
                                        $key = $a->Field;
                                        $str = verif_carct_sep($val->$key);
                                        $req_count = "SELECT COUNT(*) FROM " . $_SESSION["table"] . " WHERE `" . $key . "`=\"" . $str . "\"";
                                        $query_count = $bdd->query($req_count);
                                        $count = $query_count->fetch();
                                        echo("<input type=\"checkbox\"  id=\"" .$str . "\" name=\"$key\">" . $val->$key . " (" . $count[0] . ")<br>");
                                    }
                                    echo "</form>";
                                }
                                };
                        };?>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</article>

</body>
<script src="JS/products.js"></script>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</html>