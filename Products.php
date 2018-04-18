<!DOCTYPE html>
<?php
session_start();

if(isset($_POST["addtocart"])){

    include "cart.php";
    var_dump( $_SESSION["cart_item"]);//tester si les produits ajouter au chaiot son sauvegarder
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
            <li class="selected"><a href="#">Home</a></li>
            <li><a href="#">Specials</a></li>
            <li><a href="#">All Products</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">About</a></li>


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
                <li><a href="#">Category #1</a></li>
                <li><a href="#">Category #2</a></li>
                <li><a href="#">Category #3</a></li>
                <li><a href="#">Category #4</a></li>
                <li><a href="#">Category #5</a></li>
                <li><a href="#">Category #6</a></li>
            </ul>
        </nav>
    </section>
</header>
<article>
    <section id="content"><!-- Defining the content section #2 -->
        <div id="left">
            <h3>All Products</h3>
            <ul>
                <?php
                // cette fonction permet d eliminer les attributs qu on va pas utiliser dans le filtre--
                function verifierFiltre ($s){
                    return (strcmp($s,"Reference")!=0 &&strcmp($s,"Grantie")!=0 && strcmp($s,"Connecteurs")!=0 && strcmp($s,"stock")!=0  );
                  return (strcmp($s,"Reference")!=0 &&strcmp($s,"Grantie")!=0 && strcmp($s,"Connecteurs")!=0 && strcmp($s,"stock")!=0 &&strcmp($s,"Garantie")!=0 &&strcmp($s,"Dimension")!=0  );

                }
                //cette fonction permet de corriger la requete lorsque on utilise le caractere spécialte " -> \"
                function verif_carct_sep ($s){
                    $ret=str_replace("\"","\\\"",$s);
                    return $ret;
                }
                try {
                    $bdd = new
                    PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '0000');
                }catch (PDOException $e){
                    print "Erreur : " . $e->getMessage();
                    die();
                }

                $req = $bdd ->query("use danousdatabase");
                $req = "SELECT * FROM pc";
                $query = $bdd -> query($req);
                $pcs = $query -> fetchAll(PDO::FETCH_OBJ);
                foreach ($pcs as $p){
                ?>
                 <li>
                     <div class="img">
                        <a href="#">
                        <img src="images/<?php echo"$p->Reference"?>.jpg" alt="<?php echo "$p->Reference" ?>" style="width:128px;height:128px">
                        </a>
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
                                     <input type="text" name="quantity" value="1" size="2" />
                                     <input type="submit" name="addtocart" value="Add to cart" />
                                     <input type="submit" value="Details" />
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
                        $req = "DESCRIBE ".$table;
                        $query = $bdd -> query($req);
                        $tab = $query -> fetchAll(PDO::FETCH_OBJ);
                        // var_dump($tab);
                        foreach ($tab as $a) {
                            if (verifierFiltre($a->Field)){
                                echo ("<h4>".$a->Field."</h4>");
                                $req_dist_element = "SELECT DISTINCT `".$a->Field."` FROM ".$table;
                                $query_dist_element= $bdd -> query($req_dist_element);
                                try {
                                    $values = $query_dist_element->fetchAll(PDO::FETCH_OBJ);
                                    }catch (Exception $e) {
                                    echo 'Exception reçue : ',  $e->getMessage(), "\n";
                                    }
                                    echo  "<form>";
                                foreach ($values as $val){
                                    $key=$a->Field;
                                    $str=verif_carct_sep($val->$key);
                                    $req_count="SELECT COUNT(*) FROM ".$table." where `".$key."`=\"".$str."\"";
                                    $query_count=$bdd->query($req_count);
                                    $count=$query_count->fetch();
                                    echo ("<input type=\"checkbox\"  id=\"".$val->$key."\" name=\"$key\">".$val->$key." (".$count[0].")<br>");
                                    }
                                    echo "</form>";
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

</html>