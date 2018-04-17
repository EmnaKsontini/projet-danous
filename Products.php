<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">



    <script type="text/javascript" src="js/html5.js"></script>
    <title>Products</title>
</head>

<body>

<section id="content"><!-- Defining the content section #2 -->
    <div id="left">
        <h3>All Products</h3>
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
                   $bdd = new
                  PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '');
                }catch (PDOException $e){
                     print "Erreur : " . $e->getMessage();
                     die();
                }
                $table="telephone";
                $req = $bdd ->query("use danousdatabase");
                $req = "SELECT * FROM ".$table;
                $query = $bdd -> query($req);
                $elments = $query -> fetchAll(PDO::FETCH_OBJ);
                foreach ($elments as $el) {
                echo ("
                 <li>
                     <div class=\"img\">
                        <a href=\"#\">
                        <img src=\"images\\".$el->Reference.".jpg\" alt=\"".$el->Reference."\" style=\"width:128px;height:128px;\">
                        </a>
                    </div>
                     <div class=\"info\">
                    <a class=\"title\" href=\"#\">".$el->Reference."</a>
                    <p>on va ecire une description ici1</p>
                    <div class=\"price\">
                        <span class=\"st\">Our price:</span><strong>".$el->Prix." DT</strong>
                    </div>
                    <div class=\"actions\">
                        <a href=\"#\">Details</a>
                        <a href=\"#\">Add to cart</a>
                    </div>
                </div>
            </li>  ");
            };
                ?>


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
                        } catch (Exception $e) {
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
                    }
                };

                ?>

            </div>
        </li>
    </ul>
</div>
</section>
</body>
<script src="JS/products.js"></script>

</html>