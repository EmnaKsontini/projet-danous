<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">


    <script src="js/jquery.js"></script>

    <script src="js/jquery.nivo.slider.pack.js"></script>

    <script src="js/main.js"></script>


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
                  return (strcmp($s,"Reference")!=0 &&strcmp($s,"Grantie")!=0 && strcmp($s,"Connecteurs")!=0 && strcmp($s,"stock")!=0  );
              }
                try {
                   $bdd = new
                  PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '');
                }catch (PDOException $e){
                     print "Erreur : " . $e->getMessage();
                     die();
                }
                $req = $bdd ->query("use danousdatabase");
                $req = "SELECT * FROM pc";
                $query = $bdd -> query($req);
                $pcs = $query -> fetchAll(PDO::FETCH_OBJ);
                foreach ($pcs as $p) {
                echo ("
                 <li>
                     <div class=\"img\">
                        <a href=\"#\">
                        <img src=\"images\\".$p->Reference.".jpg\" alt=\"".$p->Reference."\" style=\"width:128px;height:128px;\">
                        </a>
                    </div>
                     <div class=\"info\">
                    <a class=\"title\" href=\"#\">".$p->Reference."</a>
                    <p>on va ecire une description ici1</p>
                    <div class=\"price\">
                        <span class=\"st\">Our price:</span><strong>".$p->Prix." DT</strong>
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
                $req = "DESCRIBE pc";
                $query = $bdd -> query($req);
                $pcs = $query -> fetchAll(PDO::FETCH_OBJ);
                foreach ($pcs as $p) {
                    if (verifierFiltre($p->Field)){
                        echo ("<h4>".$p->Field."</h4>");
                        $req2 = "SELECT DISTINCT ".$p->Field." FROM pc";
                        $query2 = $bdd -> query($req2);
                        try {
                            $values = $query2->fetchAll(PDO::FETCH_OBJ);
                        } catch (Exception $e) {
                            echo 'Exception reçue : ',  $e->getMessage(), "\n";
                        }
                        echo  "<form>";
                        foreach ($values as $v){
                            $key1=$p->Field;
                            echo ("<input type=\"checkbox\" name=\"vehicle1\" value=\"Bike\">".$v->$key1."<br>");
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
</div>
</body>
</html>