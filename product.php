<!DOCTYPE html>

<html lang="en">
<head>


    <title>Product  </title>

    <meta charset="utf-16">


    <link rel="stylesheet" href="style.css">


</head>
<body>
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '');
}catch (PDOException $e){
    print "Erreur : " . $e->getMessage();
    die();
}
$table_name="pc";
//$ref = $_GET['ref'];
$ref = "LI2054";
$req = $bdd ->query("use danousdatabase");
$req = "SELECT * FROM ".$table_name." where `Reference`=\"".$ref."\"";
$query = $bdd -> query($req);
$obj = $query -> fetch(PDO::FETCH_OBJ);

?>
<header>
    <nav id="nav">
        <ul>
            <li class="selected"><a href="#">Home</a></li>
            <li><a href="#">Specials</a></li>
            <li><a href="#">All Products</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">About</a></li>
            <li><a href="formulaireLogin.php"> <img src="images/this .png" ></a></li>
         <!--   <li><a href="formulaireLogin.php"> <img src="taswira Danous!!" ></a></li>-->
        </ul>
        <section id="search"><!-- Search form -->
            <form action="#" onsubmit="return false;" method="get">
                <input type="text" onfocus="if (this.value =='Search..' ) this.value=''" onblur="if (this.value=='') this.value='Search..'" value="Search.." name="q">
                <input type="submit" value="Search" id="searchbutton">
            </form>

        </section>
    </nav>
    <section id="cat">
        <nav id="submenu">
            <ul>
                <li><a href="#">LAPTOP</a></li>
                <li><a href="#">Category #2</a></li>
                <li><a href="#">Category #3</a></li>
                <li><a href="#">Category #4</a></li>
                <li><a href="#">Category #5</a></li>
                <li><a href="#">Category #6</a></li>
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
    <div class="right-column color">

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