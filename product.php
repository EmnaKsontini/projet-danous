<!DOCTYPE html>

<html lang="en">
<head>


    <title>Product  </title>

    <meta charset="utf-16">


    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="StyleForProduct.css">


</head>
<body>
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '');
}catch (PDOException $e){
    print "Erreur : " . $e->getMessage();
    die();
}
$ref = $_GET["code"];
$table_name=$_POST["type"];
//$ref = "LI2054";
$req = $bdd ->query("use danousdatabase");
$req = "SELECT * FROM ".$table_name." where `Reference`=\"".$ref."\"";
$query = $bdd -> query($req);
$obj = $query -> fetch(PDO::FETCH_OBJ);

?>
<header>
    <nav class="hey" >
        <ul>
            <li class="selected"><a href="#">Home</a></li>
            <li><a href="#">Specials</a></li>
            <li><a href="Products.php">All Products</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">About</a></li>
            <?php
            if(!isset($_SESSION['login']))
                echo"<li><a href=\"formulaireLogin.php\"> <img class=\"home\" src=\"images/this2.png\" title=\"LogIn\" ></a></li>";
            else echo"<li><a href=\"profile.php\">my profile</a> </li>";
            ?>




        </ul>
        <section id="search"><!-- Search form -->
            <form action="#" onsubmit="return false;" method="get">
                <input type="text" onfocus="if (this.value =='Search..' ) this.value=''" onblur="if (this.value=='') this.value='Search..'" value="Search.." name="q">
                <input type="submit" value="Search">
            </form>

        </section>
    </nav>

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
        </nav>
    </section>
</header>
<main class="container">

    <!-- Left Column / Headphones Image -->
    <div class="left-column">
        <?php
        echo("<img  class=\"active\" src=\"images/".$ref.".jpg\" alt=\"\">");
        ?>
    </div>



    <!-- Right Column -->
    <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
            <?php
            echo ("
            <span>".$obj->Categorie."</span>
            <h1>".$obj->Marque."</h1>
            <span>".$ref."</span>");

            ?>
        </div>
        <table>
            <?php
            $req = "DESCRIBE ".$table_name;
            //echo $req;
            $query = $bdd -> query($req);
            $tab_attribut = $query -> fetchall(PDO::FETCH_NUM );
            //var_dump($tab_attribut);
            foreach ($tab_attribut as $ta){
                echo("<tr>");
                echo ("<td>".$ta[0]."</td>");
                $s=$ta[0];
                echo ("<td>".$obj->$s."</td>");
                echo("</tr>");
            }
            ?>
        </table>


        <!-- Product Pricing -->
        <div class="product-price">
            <?php
            echo ("
            <span>".$obj->Prix." DT</span> ");
            ?>
            <a href="#" class="cart-btn">Add to cart</a>
        </div>
    </div>
</main>
</body>