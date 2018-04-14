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
                    //var_dump($p);
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
            <div class="img"><a href="#"><img alt="" src="images/post6.jpg"></a></div>
            <div class="info">
                <a class="title" href="#">Product 7</a>
                <div class="price">
                    <span class="usual">dt600.00 </span>&nbsp;
                    <span class="special">dt500.00</span>
                </div>
            </div>
        </li>

    </ul>
</div>
</section>
</div>
</body>
</html>